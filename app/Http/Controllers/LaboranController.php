<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;



class LaboranController extends Controller
{
    public function index(){
        return view('index');
    }

    public function approvePeminjaman(Request $request){
        $id = $request->nisn;
        Peminjaman::where('nisn',$id)->update([
            'status'=>'1',
            'validator'=>Auth::user()->name,
        ]);

        return redirect(route('indexPeminjaman'));
    }

   
}
