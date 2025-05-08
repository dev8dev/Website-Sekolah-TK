<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\awalController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashboardFakultasController;


// Front menu
use App\Http\Controllers\sliderController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\testimonialController;

// profil menu
use App\Http\Controllers\sambutandekanController;
use App\Http\Controllers\sejarahController;
use App\Http\Controllers\visitujuanController;
use App\Http\Controllers\strukturorganisasiController;
use App\Http\Controllers\akreditasiprodiController;
use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\careercenterController;
use App\Http\Controllers\kerjasamainternationalController;

//Akademik Menu
use App\Http\Controllers\akademikController;
use App\Http\Controllers\jadwalujianController;
use App\Http\Controllers\publikasiController;
use App\Http\Controllers\semesterantaraController;
use App\Http\Controllers\kurikulumController;

//Alumni Menu
use App\Http\Controllers\kisahsuksesController;
use App\Http\Controllers\ikatanalumniController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\tracerstudiController;

//kemahasiswaan Menu
use App\Http\Controllers\himatikaController;

//setting Menu
use App\Http\Controllers\gelarController;
use App\Http\Controllers\userrController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::get('/', function () {return view('v_login');});

//frontend
//home
//Route::get('/', [dashboardController::class, 'index'])->name('informatika_ubhara');
Route::get('/', [dashboardFakultasController::class, 'index'])->name('teknik_ubhara');

//profil menu
Route::get('/sambutan_dekan', [dashboardFakultasController::class, 'sambutandekan'])->name('sambutan_dekan');
//Route::post('sambutandekan/destroy-multiple', [SambutanDekanController::class, 'destroyMultiple'])->name('sambutandekan.destroy.multiple');
Route::get('/sejarah', [dashboardFakultasController::class, 'sejarah'])->name('sejarah');
Route::get('/visi_dan_tujuan', [dashboardFakultasController::class, 'visitujuan'])->name('visi_dan_tujuan');
Route::get('/struktur_organisasi', [dashboardFakultasController::class, 'strukturorganisasi'])->name('struktur_organisasi');
Route::get('/akreditasi_prodi', [dashboardFakultasController::class, 'akreditasiprodi'])->name('akreditasi_prodi');
Route::get('/fasilitas', [dashboardFakultasController::class, 'fasilitas'])->name('fasilitas');
Route::get('/career_center', [dashboardFakultasController::class, 'careercenter'])->name('career_center');
Route::get('/kerjasama_international', [dashboardFakultasController::class, 'kerjasamainternational'])->name('kerjasama_international');

//Akademik Menu
Route::get('/form_akademik', [dashboardFakultasController::class, 'akademik'])->name('form_akademik');
Route::get('/jadwal_ujian', [dashboardFakultasController::class, 'jadwalujian'])->name('jadwal_ujian');
Route::get('/publikasi', [dashboardFakultasController::class, 'publikasi'])->name('publikasi');
Route::get('/semester_antara', [dashboardFakultasController::class, 'semesterantara'])->name('semester_antara');
Route::get('/kurikulum', [dashboardFakultasController::class, 'kurikulum'])->name('kurikulum');

//Alumni Menu
Route::get('/kisah_sukses', [dashboardFakultasController::class, 'kisahsukses'])->name('kisah_sukses');
Route::get('/ikatan_alumni', [dashboardFakultasController::class, 'ikatanalumni'])->name('ikatan_alumni_informatika');
Route::get('/prestasi', [dashboardFakultasController::class, 'prestasi'])->name('prestasi');
Route::get('/tracer_studi', [dashboardFakultasController::class, 'tracerstudi'])->name('tracer_studi');

//kemahasiswaan Menu
Route::get('/himatika', [dashboardFakultasController::class, 'himatika'])->name('himatika');



//backend
Route::get('/depan', [dashboardFakultasController::class, 'depan'])->name('depan');
Route::get('/login', [dashboardFakultasController::class, 'login'])->name('login');

// front Layout menu
Route::resource('slider', sliderController::class);
Route::resource('berita', beritaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('testimonial', testimonialController::class);

// profil menu
Route::resource('sambutandekan', sambutandekanController::class);
Route::resource('sejarah_b', sejarahController::class);
Route::resource('vdt', visitujuanController::class);
Route::resource('sto', strukturorganisasiController::class);
Route::resource('akr', akreditasiprodiController::class);
Route::resource('fas', fasilitasController::class);
Route::resource('carcen', careercenterController::class);
Route::resource('int', kerjasamainternationalController::class);

//Akademik Menu
Route::resource('f_ak', akademikController::class);
Route::resource('j_ujian', jadwalujianController::class);
Route::resource('pub', publikasiController::class);
Route::resource('sem_antara', semesterantaraController::class);
Route::resource('kur', kurikulumController::class);

//Alumni Menu
// Route::resource('sejarah_b', kisahsuksesController::class);
// Route::resource('vdt', ikatanalumniController::class);
// Route::resource('vdt', prestasiController::class);
// Route::resource('vdt', tracerstudiController::class);

//setting
Route::resource('gelar', gelarController::class);
Route::resource('userr', userrController::class);

//contoh
Route::resource('awal', awalController::class);


// route detail jurnal
Route::get('jurnal/{id}/print', [jurnalController::class, 'print']);
Route::get('jurnaldet/{id}/detail', [jurnaldetailController::class, 'index']);
Route::get('jurnaldet/{id}/edit/{operation}', [jurnaldetailController::class, 'edit']);
Route::get('jurnaldet/{id}/create', [jurnaldetailController::class, 'create']);
Route::post('jurnaldet/{id}/store', [jurnaldetailController::class, 'store']);
Route::delete('jurnaldet/{id}', [jurnaldetailController::class, 'destroy']);

//Report Barang
//Route::get('/report', [ReportController::class, 'generatePDF']);