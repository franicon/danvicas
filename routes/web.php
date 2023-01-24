<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/insights', function () {
    return view('insights');
});
Route::get('/insight/', function () {
    return view('insight');
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
