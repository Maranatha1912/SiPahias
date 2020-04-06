<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    
    public function edit()
    {
        return view('edit');
    }

    public function editprofil()
    {
        return view('editprofil');
    }

    public function editpassword()
    {
        return view('editpassword');
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

    public function jemput2()
    {
        return view('jemput2');
    }


    public function your()
    {
        return view('your');
    }

}
