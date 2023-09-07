<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;

class DataPeminjamController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Nasabah::query();

        if ($search) {
            $query->where('nama', 'LIKE', '%' . $search . '%');
        }

        $dtNasabah = $query->get();

        return view('admin.data.data-peminjam', compact('dtNasabah'));
    }

    public function create()
    {
        $nextNoreg = Nasabah::generateNextNoreg();
        return view('admin.data.create-peminjam', compact('nextNoreg'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'noreg' => 'required',
        ]);


        Nasabah::create($validatedData);

        return redirect()->route('data-peminjam')->with('success', 'Data peminjam berhasil disimpan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        return view('admin.data.edit-peminjam', compact('nasabah'));
    }

    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::findOrFail($id);
        
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'noreg' => 'required',
        ]);
        


        $nasabah->update($validatedData);
        // $nasabah->sendTanggalPengembalianNotification();

        return redirect()->route('data-peminjam')->with('success', 'Data peminjam berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        $nasabah->delete();

        return redirect()->route('data-peminjam')->with('success', 'Data peminjam berhasil dihapus.');
    }
}
