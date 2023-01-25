<?php

use App\Models\Insight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home');
});

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('project/{insight:id}', [ProjectController::class, 'show']);

Route::get('/insights', [InsightController::class, 'index'])->name('insights');
Route::get('/insight/{insight:slug}', [InsightController::class, 'show'])->name('insights');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/quotation', function () {
    return view('quotation');
});

//Admin
Route::get('/admin', function () {
    return view('admin.home');
})->middleware('auth');

Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'store'])->middleware('guest');
Route::post('/logout',[LoginController::class, 'destroy'])->middleware('auth');
