<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas=Siswa::All();
        return view('siswa.index', compact('siswas'));
    }
    
    public function create()
    {
        return view('siswa/create');
    }
    
    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
        ]);
        
        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Berhaslil menambahkan.');
    }

    public function edit(Name $siswa)
    {
        return view('siswas.edit',compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
        ]);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success','Berhasil mengupdate');
    }
    
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
    
        return redirect()->route('siswa.index')->with('success','Berhasil menghapus');
    }
}
// Aditya