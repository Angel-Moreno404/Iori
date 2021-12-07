<?php
use Illuminate\Http\Request;
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

/*Route::get('invoice', function () {
    return 'invoice';
});*/
Route::get('invoice', function () {
    return view('invoice');
});


/*Route::get('resources\views\layouts\invoice',function(){


    return view('invoice');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');        

//this to intervention image
Route::get('/file-resize', [ResizeController::class, 'index']);

Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');