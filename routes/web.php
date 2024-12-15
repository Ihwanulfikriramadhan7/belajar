<?php

use App\Http\Controllers\NilaiController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// pertemuan ke 2
Route::get('/salam', function () {
    return"<h1>selamat datang dilaravel</h1>";
});
// routing dengan mengambilkan nilai ke diri sendiri

Route::get('/staffs/{nama}/{devisi}', function ($nama, $devisi) {
   return 'Nama Staffs'.$nama.'<br> Dapertemen '.$devisi; 
});
// routing mengambil parameter

Route::get('/kabar',function(){
    return view('kondisi');
});//routing /url yang mengarahkan ke tampilan file kondisi yang ada diview

// Route::get('/nilai', function(){
//     return view('nilai');
// });//routing /url yang mengarahkan ke tampilan file Nilai yang ada diview

Route::get('/nilai',[NilaiController::class,'index']);

Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});

Route::resource('staff', StaffController::class); 
