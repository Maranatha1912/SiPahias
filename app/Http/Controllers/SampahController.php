<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    
    public function edit()
    {
        return view('edit');
    }

    public function tukarpoin()
    {
        return view('tukarpoin');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function antar()
    {
        return view('antar');
    }

    public function jemput()
    {
        return view('jemput');
    }

    public function your()
    {
        return view('your');
    }

    public function StatusAntar()
    {
        $sampah=Sampah::all();
        // return $sampah;
        // die;
        return view('statusAntar',compact('sampah'));
    }

}
