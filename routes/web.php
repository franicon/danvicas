<?php

use App\Models\Insight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsightController;


Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/project/', function () {
    return view('project');
});

Route::get('/insights', [InsightController::class, 'index'])->name('insights');

Route::get('/insight/{insight:slug}', function (Insight $insight) {
    return view('insight', [
        'insight' => $insight
    ]);
});

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
});
