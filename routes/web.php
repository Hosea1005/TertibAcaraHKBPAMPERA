<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JemaatController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'homeJemaat']);
Route::get('/jemaat', [App\Http\Controllers\HomeController::class, 'homeJemaat']);

Route::get('/tam', function () {
    return view('tertib_acara');
});

Route::get('/home/partamiangan', function () {
    return view('partamiangan');
});

Route::get('/home/specialday', function () {
    return view('spesialday');
});

Route::get('/admin/login/ta', function () {
    return view('auth.login');
});
Route::get('/home/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'dashboardAdmin']);


Route::get('/home/listMingguan', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraMingguan']);
Route::get('/home/listNatal', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraNatal']);
Route::get('/home/listPaskah', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraPaskah']);
Route::get('/home/listJumatAgung', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraJumatAgung']);
Route::get('/home/listKenaikan', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraKenaikan']);
Route::get('/home/listPentakosta', [App\Http\Controllers\JemaatController::class, 'listTertibAcaraPentakosta']);
Route::get('/home/detailMingguan/{id}', [App\Http\Controllers\JemaatController::class, 'detailTertibAcaraMingguan']);
Route::get('/home/detailMingguanAdmin/{id}', [App\Http\Controllers\HomeController::class, 'detailTertibAcaraMingguanAdmin']);

Route::post('/home/ta/inserttertibacara', [App\Http\Controllers\HomeController::class, 'insertTertib']);
Route::get('/home/deleteMingguan/{id}', [App\Http\Controllers\HomeController::class, 'deleteTertib']);
Route::get('/home/editMingguan/{id}', [App\Http\Controllers\HomeController::class, 'editTertib']);
Route::post('/home/ta/edittertibacara/{id}', [App\Http\Controllers\HomeController::class, 'updateTertib']);



Auth::routes();
Route::get('/home/addAcara', function () {
    return view('addTataTertib');
});

Route::get('/home', 'HomeController@index')->name('home');
