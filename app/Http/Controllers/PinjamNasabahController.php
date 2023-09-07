<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Nasabah;

class PinjamNasabahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $query = Peminjaman::with('peminjam');
    
        if ($search) {
            $query->whereHas('peminjam', function ($query) use ($search) {
                $query->where('nama', 'LIKE', '%' . $search . '%');
            });
        }
    
        $peminjamans = $query->get();
    
        $totalNominal = Peminjaman::sum('nominal');
    
        return view('admin.data.peminjaman-nasabah', compact('peminjamans', 'totalNominal'));
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'idpeminjam' => 'required',
            'nominal' => 'required|numeric',
        ]);
    
        // Ambil data peminjam berdasarkan id yang diberikan
        $peminjam = Nasabah::findOrFail($request->idpeminjam);
    
        // Simpan data peminjaman ke tabel "peminjaman" termasuk No Registrasi
        Peminjaman::create([
            'idpeminjam' => $peminjam->id,
            'nominal' => $request->nominal,
            'tglpeminjaman' => $request->tglpeminjaman,
            'tglpengembalian' => $request->tglpengembalian,
            'noreg' => $request->noreg, // Menyimpan No Registrasi
            'keterangan' => $request->keterangan, // Menyimpan Keterangan
        ]);
    
        // Redirect atau lakukan operasi lain setelah penyimpanan berhasil
        return redirect()->route('peminjaman-nasabah');
    }
    
    public function create()
    {
        $nasabahs = Nasabah::all();
        return view('admin.data.create-peminjaman', compact('nasabahs'));
    }
}
