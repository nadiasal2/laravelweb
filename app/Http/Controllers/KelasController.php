<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            "title" => "Kelas",
            "kelas" => Kelas::all()
        ]);
    }

    public function show(Kelas $kelas)
    {
        return view('kelas.detail', [
            "title" => "detail-kelas",
            "kelas" => $kelas
        ]);
    }

    public function create()
    {
        return view('kelas.create', [
            "title" => "create",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate ([
            'nama'      => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);
        if ($result){
            return redirect('/kelas/all')->with('success','Data siswa berhasil ditambahkan!');

        }
    }

    public function destroy(Kelas $kelas)
    {
        $result = Kelas::destroy($kelas->id);

        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', [
            "title" => "edit-data",
            "kelas" => $kelas,
        ]);
    }

    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:225',
        ]);

        $result = Kelas::where('id', $kelas->id)->update($validateData);
        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data Siswa berhasil diubah !');
        }
       
    }
}
