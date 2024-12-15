<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
    public function index(){
        echo "menampilkan seluruh data animal";
    }
    public function store(){
        echo "menambahkan hewan baru";
    }
}
