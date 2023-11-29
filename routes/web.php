<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PujasController;

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
    return view('welcome');
});



Route::get('/tambahdatabarang', [PujasController::class, 'tambahdatabarang'])->name('tambahdatabarang');
Route::post('/insertdatabarang', [PujasController::class, 'insertdatabarang'])->name('insertdatabarang');
// Route::get('/editdatabarang/{id}', [PujasController::class, 'editdatabarang'])->name('editdatabarang');
// Route::post('/updatedatabarang/{id}', [PujasController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletebarang/{id}', [PujasController::class, 'deletebarang'])->name('deletebarang');
Route::get('/editdatabarang/{id}', [PujasController::class, 'editdatabarang'])->name('editdatabarang');
Route::post('/editdatabarang/{id}', [PujasController::class, 'updatedatabarang'])->name('updatedatabarang');


Route::get('/tambahdatakasir', [PujasController::class, 'tambahdatakasir'])->name('tambahdatakasir');
Route::post('/insertdatakasir', [PujasController::class, 'insertdatakasir'])->name('insertdatakasir');
