<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\adminTenant; 
use App\Models\pemTenant; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class custBookingTenantController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter 'nama', 'lokasi', dan 'deskripsi' dari URL
        $namaEvent = $request->input('namaEvent');

        // Ambil data ruangan berdasarkan 'nama', 'lokasi', dan 'deskripsi'
        $event = event::where('namaEvent', $namaEvent)->first();
        $makanan = pemTenant::where('tipeTenant', 'Tenant Makanan')->count();
        $barang = pemTenant::where('tipeTenant', 'Tenant Barang')->count();
        $jasa = pemTenant::where('tipeTenant', 'Tenant Jasa')->count();

        $colors = ['#3788d8', '#f39c12', '#27ae60', '#8e44ad', '#e74c3c', '#16a085', '#d35400', '#2ecc71', '#3498db', '#9b59b6'];

        $calendarEvents = Event::select('namaEvent as title', 'tglMulai as start', 'tglSelesai as end')
        ->get()
        ->map(function ($event, $index) use ($colors) {
            $event->color = $colors[$index % count($colors)];
            $event->end = Carbon::parse($event->end)->addDay()->toDateString();
            return $event;
        });

        $calendarEventsJson = json_encode($calendarEvents);

        // Mengambil URL gambar utama dan URL thumbnail
        if (!empty($event->foto)) {
            $event->foto_url = Storage::url(json_decode($event->foto)[0]);  
            $event->foto_urls = json_decode($event->foto); 
        } else {
            $event->foto_url = asset('default-image.jpg');
            $event->foto_urls = []; // Tidak ada thumbnail jika tidak ada foto
        }

        // Kirim data ruangan ke view
        return view('custBookingTenant', compact('event', 'calendarEventsJson', 'barang', 'jasa', 'makanan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'namaEvent'  => 'required|exists:event,namaEvent', // Validasi namaEvent di tabel event
            'idAdmin'      => 'required|exists:adminTenant,idAdmin', // Validasi idAdmin di tabel adminRuangan
            'namaTenant' => 'required|string',
        ]);

        
        // $fotoPaths = [];
        // if ($request->hasFile('buktiBayar')) {
        //     foreach ($request->file('buktiBayar') as $buktiBayar) {
        //         $path = $buktiBayar->store('foto_buktiBayar', 'public'); // Simpan di folder foto_ruangan
        //         $fotoPaths[] = Storage::url($path); // Simpan path ke array
        //     }
        // }

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        // Ambil nik dari model customer
        $nik = \App\Models\customer::getNikByEmail($user->email);

        if (!$nik) {
            // Tangani error jika nik tidak ditemukan
            return back()->with('error', 'Customer tidak ditemukan');
        }

        $already = pemTenant::where('idCustomer', $nik)->where('namaEvent', $request->input('namaEvent'))->first();

        if ($already){
            return redirect()->back()->withErrors('Anda hanya dapat memesan 1 tenant untuk 1 event!');
        }

        $makanan = event::where('namaEvent', $request->input('namaEvent'))->first()->nMakanan;
        $jasa = event::where('namaEvent', $request->input('namaEvent'))->first()->nJasa;
        $barang = event::where('namaEvent', $request->input('namaEvent'))->first()->nBarang;

        if ($request->input('tipeTenant') == 'Tenant Makanan' && $makanan == 0) {
            return redirect()->back()->withErrors('Maaf, kuota untuk tenant makanan sudah habis, silahkan berkunjung dilain waktu!');
        }
        if ($request->input('tipeTenant') == 'Tenant Jasa' && $jasa == 0) {
            return redirect()->back()->withErrors('Maaf, kuota untuk tenant makanan sudah habis, silahkan berkunjung dilain waktu!');
        }
        if ($request->input('tipeTenant') == 'Tenant Barang' && $barang == 0) {
            return redirect()->back()->withErrors('Maaf, kuota untuk tenant makanan sudah habis, silahkan berkunjung dilain waktu!');
        }

        // Siapkan data untuk disimpan
        $dataToStore = [
            'idCustomer'    => $nik,
            'namaEvent'     => $request->input('namaEvent'),
            'idAdmin'       => $request->input('idAdmin'),
            'namaPemohon'   => $request->input('namaPemohon'),
            'noWa'          => $request->input('noWa'),
            'namaTenant'   => $request->input('namaTenant'),
            'tipeTenant'     => $request->input('tipeTenant'),
            'status'        => 'Belum bayar',
             // 'buktiBayar'    => json_encode($fotoPaths),
            ];

        // Simpan data ke database
        pemTenant::create($dataToStore);

        if ($request->input('tipeTenant') == 'Tenant Makanan') {
            DB::table('event')->where('namaEvent', $request->input('namaEvent'))->update([
                'nMakanan' => $makanan - 1,
            ]);
        }
        if ($request->input('tipeTenant') == 'Tenant Jasa') {
            DB::table('event')->where('namaEvent', $request->input('namaEvent'))->update([
                'nJasa' => $jasa - 1,
            ]);
        }
        if ($request->input('tipeTenant') == 'Tenant Barang') {
            DB::table('event')->where('namaEvent', $request->input('namaEvent'))->update([
                'nBarang' => $barang - 1,
            ]);
        }

        return redirect()->back()->with('success', 'Booking tenant berhasil!');
    }
}
