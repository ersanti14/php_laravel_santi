<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


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
    return view('principal');
});

Route::get('/registro', [RegisterController::class,'index'])->name('register');
Route::post('/registro', [RegisterController::class,'store']);

Route::get('/{users}/actualizar',[PostController::class,'actualizar'])->name('actualizar');

Route::put('/{users}',[PostController::class,'update'])->name('editar');
Route::delete('/{user}',[PostController::class,'destroy'])->name('eliminar');


Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::get('/export_user_pdf',[PostController::class,'export_user_pdf'])->name('export_user_pdf');
Route::get('/export-user/{id}', [PostController::class,'export_user'])->name('export_user');

