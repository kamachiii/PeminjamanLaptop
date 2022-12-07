<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamController extends Controller
{
    public function index(){
        return view('peminjam.index');
    }

    public function create(){
        $data = Peminjaman::all();
        //dd($data);
        return view('peminjam.create',compact('data'));
    }

    public function storePeminjaman(Request $request){
        $request->validate([
            'nisn' => 'required|min:8',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'no_laptop' => 'required',
            'ruangan' => 'required'

        ]);

        Peminjaman::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'no_laptop' => $request->no_laptop,
            'ruangan' => $request->ruangan

        ]);

        return redirect('/create')->with('success','Peminjaman Berhasil Dilakukan!');
    }
}
