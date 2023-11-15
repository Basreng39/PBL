<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            "judul" => "Dashboard Admin"
        ]);
    }

    public function kamar(){
        return view('kamar',[
            "judul" => "Data Kamar"
        ]);
    }

    public function login(){
        return view("dashboard.login",[
            "judul" => "Admin Login"
        ]);
    }

    public function auth(Request $request){
        $valid = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();

            return redirect()->intended("/admin");
        }

        return back()->with("fail","Login Gagal");

        // dd("Berhasil");
    }
}
