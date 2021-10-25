<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/loginpage','tampilan_controlle@login');
route::get('/layoutmhs','mahasiswa_controller@mahasiswa');
route::get('/surat','mahasiswa_controller@surat');
route::post('/surat/tambah','mahasiswa_controller@tambah');
route::get('/dosen','tampilan_controlle@viewdosen');
route::get('/admin','tampilan_controlle@viewadmin'); 

