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
route::get('/loginadmin','tampilan_controlle@loginadmin');
route::get('/logindosen','tampilan_controlle@logindosen');



route::get('/login', function(){
    return view ('login');
});
route::post('/postlogin','LoginController@postlogin')->name('postlogin');
route::post('/postloginadmin','LoginController@postloginadmin')->name('postloginadmin');
route::post('/postlogindosen','LoginController@postlogindosen')->name('postlogindosen');

route::get('/logout','LoginController@logout')->name('logout');
route::get('/logoutadmin','LoginController@admin')->name('logoutadmin');
route::get('/logoutdosen','LoginController@dosen')->name('logoutdosen');

route::get('/layoutmhs','mahasiswa_controller@mahasiswa');
route::get('/surat','mahasiswa_controller@surat');
route::get('/suratkeluarmhs','mahasiswa_controller@suratkeluarmhs');
route::get('/suratmasukmhs','mahasiswa_controller@suratmasukmhs');
Route::post('/deletesurat/{id}','mahasiswa_controller@delete'); 
route::post('/surat/tambah','mahasiswa_controller@tambah');

route::get('/dosen','tampilan_controlle@viewdosen');
route::get('/suratdsn','dosen_controller@suratdsn');
route::post('/surat/tambahsrt','dosen_controller@tambahsrt');
route::get('/suratkeluardsn','dosen_controller@suratkeluardsn');
route::get('/suratmasukdsn','dosen_controller@suratmasukdsn'); 

route::get('/beritaacaradsn','beritaacaradsn_controller@beritaacaradsn');
route::get('/suratberitaacara','beritaacaradsn_controller@suratberitaacara');
route::post('/surat/tambahsrtba','beritaacaradsn_controller@tambahsrtba');

route::get('/srtpersonalia','srtpersonaliadsn_controller@srtpersonaliadsn');
route::get('/suratpersonalia','srtpersonaliadsn_controller@suratpersonalia');
route::post('/surat/tambahsrtpl','srtpersonaliadsn_controller@tambahsrtpl');

route::get('/srtpermohonan','srtpermohonandsn_controller@permohonan');
route::get('/suratpermohonan','srtpermohonandsn_controller@suratpermohonan');
route::post('/surat/tambahsrtper','srtpermohonandsn_controller@tambahsrtper');

// route::get('/bamhs','tampilan_controlle@bamhs');
route::get('/bamhs','beritaacaramhs_controller@beritaacaraamhs');
route::get('/suratbamhs','beritaacaramhs_controller@suratbamhs');
route::post('/surat/tambahsrtbamhs','beritaacaramhs_controller@tambahsrtbamhs');

route::get('/srtpersonaliamhs','srtpersonaliamhs_controller@personalia');
route::get('/suratpersonaliamhs','srtpersonaliamhs_controller@suratpersonaliamhs');
route::post('/surat/tambahsrtplmhs','srtpersonaliamhs_controller@tambahsrtplmhs');

route::get('/srtpermohonanmhs','srtpermohonanmhs_controller@permohonanmhs');
route::get('/suratpermohonanmhs','srtpermohonanmhs_controller@suratpermohonanmhs');
route::post('/surat/tambahsrtpermhs','srtpermohonanmhs_controller@tambahsrtpermhs');

route::get('/admin','tampilan_controlle@viewadmin'); 

