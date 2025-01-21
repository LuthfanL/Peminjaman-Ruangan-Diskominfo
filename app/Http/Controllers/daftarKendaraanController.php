<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use Illuminate\Support\Facades\Storage;

class daftarKendaraanController extends Controller
{
    public function index(Request $request)
    {

        $kendaraan = kendaraan::all();
        
        foreach ($kendaraan as &$data) {
            if (!empty($data->foto)) {
                // Ambil URL gambar utama dan URL thumbnail
                $data->foto_url = Storage::url(json_decode($data->foto)[0]);
                $data->foto_urls = json_decode($data->foto); // Array foto untuk thumbnails
            } else {
                $data->foto_url = asset('default-image.jpg');
                $data->foto_urls = []; // Tidak ada thumbnail jika tidak ada foto
            }
        }
        
        // Mengirim data ke view
        return view('daftarKendaraan', compact('kendaraan'));
    }

    public function search(Request $request)
    {
        // Tangkap input pencarian
        $keyword = $request->input('keyword');
        
        // Jika ada pencarian, cari berdasarkan nama atau platNomor
        if ($keyword) {
            $kendaraan = kendaraan::where('nama', 'like', "%{$keyword}%")
                ->orWhere('platNomor', 'like', "%{$keyword}%")
                ->get(); // Ambil data kendaraan yang sesuai dengan pencarian
        } else {
            // Jika tidak ada pencarian, ambil semua data kendaraan
            $kendaraan = kendaraan::all(); // Mengambil semua kendaraan
        }
    
        // Kirim data ke view
        return view('daftarKendaraan', compact('kendaraan', 'keyword'));
    }

    public function destroy($platNomor)
    {
        // Cari kendaraan berdasarkan platNomor
        $kendaraan = kendaraan::where('platNomor', $platNomor)->first();

        // Periksa apakah kendaraan ditemukan
        if (!$kendaraan) {
            return redirect()->back()->with('error', 'Kendaraan tidak ditemukan.');
        }

        // Hapus kendaraan
        $kendaraan->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('daftarKendaraan')->with('success', 'Kendaraan berhasil dihapus.');
    }

}
