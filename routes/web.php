<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Certificate;
use App\Helpers;
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
Route::get('/', function () {
    return view('home');
});
// Route::get('/', [App\Http\Controllers\CertificateController::class, 'store'])->name('home');

Route::resource('certificates',CertificateController::class);
Auth::routes();
Route::get('/certificate/{id_certficate}', function ($id) {
    $certificate = Certificate::find($id);
    $pdf = PDF::loadView('layouts\certificate',[
        'certificate' => $certificate,
        ]);
    return $pdf ->setPaper('A4','landscape')->stream('certificate.pdf');
});
Route::get('/certificateprueba/{id_certficate}', function ($id) {
    $certificate = Certificate::find($id);
    $pdf = PDF::loadView('layouts\certificateprueba',[
        'certificate' => $certificate,
        ]);
    return $pdf ->setPaper('A4','landscape')->stream('certificate.pdf');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController\CertificateController::class, 'index'])->name('home');
