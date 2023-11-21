<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{

    public function kamar(Kamar $kamar){

        return view('kamar',[
            "judul" => "Data Kamar",
            "total" => $kamar->all()->count(),
            "kamar" => Kamar::latest()->paginate(12),

        ]);
    }

    public function tambahKamar(){
        return view("tambah_kamar",[
            "judul" => "Tambah Kamar"
        ]);
    }

    public function store(Request $request){
        dd($request);
    }
}
