<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->route('peminjaman');
        }
        return back()->with('error', 'email or password incorrect');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
