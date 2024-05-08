<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/fakultas', function () {
//     $kampus ="Universitas Multi Data Palembang";
//     $fakultas= ["Fakultas Ilkom","Fakultas Ilmu Ekonomi"];

//     //return compact('fakultas','kampus');
//     return view('fakultas.index',compact('fakultas','kampus'));
// });

Route::get('/fakultas',[ProdiController::class,'index']);
