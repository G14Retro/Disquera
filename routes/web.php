<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ArtistaController;
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

// Route::get('/artista', function () {
//     return view('artista.index');
// });

// Route::get('/artista/create', [ArtistaController::class,'create']);

Route::resource('album', AlbumController::class)->middleware('auth');
Route::resource('artista', ArtistaController::class)->middleware('auth');
Route::resource('cancion', CancionController::class)->middleware('auth');
Route::resource('disquera', DisqueraController::class)->middleware('auth');
Route::resource('genero-musical', GeneroController::class)->middleware('auth');
Auth::routes();

Route::get('/',function(){
    return view('auth.login');
});
Route::get('/home', 'ArtistaController@index')->name('artista');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'ArtistaController@index')->name('artista');
});
