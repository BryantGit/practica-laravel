<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use GuzzleHttp\Handler\Proxy;
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

Route::get('/curso-semestral',[PagesController::class,'semestral'])->name('semestral');
Route::get('/curso-semi',[PagesController::class,'semi'])->name('semi');
Route::get('/curso-anual',[PagesController::class,'anual'])->name('anual');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/Producto',[ProductoController::class,'saludo']);
