<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Digishopcontroller;
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
    return view('digis');
});
Route::get('digis',[Digishopcontroller::class, 'index'])->name('digis.index');
Route::get('insertdigi' ,[Digishopcontroller::class, 'insert'])->name('insertdigi');
Route::post('insertdigi' ,[Digishopcontroller::class, 'create'])->name('insertdigipost');
Route::get('updatedigi/{id}',[Digishopcontroller::class, 'update'])->name('updatedigi');
Route::put('editdigi' ,[Digishopcontroller::class, 'edit'])->name('editdigi');
Route::get('show/{id}' ,[Digishopcontroller::class, 'show'])->name('showdigi');
Route::delete('/deletedigi/{id}' ,[Digishopcontroller::class, 'destroy'])->name('deletedigi');