<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    //
    public function index(){
        $mhs1 = 'Fitri'; $asal = 'Sumi';
        return view('nilai', compact('mhs1','asal'));
    }
}
