<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
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
    return view("welcome");
});

Route::get("/contact", function () {
    return view('Contact');
});

Route::post('/test/{id}', [DemoController::class, "demoController"]);

Route::get('/all-brand', [BrandController::class, 'index'])->name('all-brand.index');
Route::get('/show-brand/{id}', [BrandController::class, 'show'])->name('all-brand.show');
Route::put('/update-brand/{id}', [BrandController::class, 'update'])->name('all-brand.update');
Route::post('/delete-brand/{id}', [BrandController::class, 'destroy'])->name('all-brand.destroy');
