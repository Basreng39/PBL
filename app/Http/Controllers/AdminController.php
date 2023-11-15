<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
