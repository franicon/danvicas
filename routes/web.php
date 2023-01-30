<?php

use App\Models\Insight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminInsightController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminProjectController;

Route::get('/', function () {
    return view('home', [
        'insights' => Insight::latest()->get()
    ]);
});

// Services
Route::get('/services', [ServiceController::class, 'index']);

// Projects
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('project/{insight:id}', [ProjectController::class, 'show']);

// Insights
Route::get('/insights', [InsightController::class, 'index'])->name('insights');
Route::get('/insight/{insight:slug}', [InsightController::class, 'show'])->name('insights');

// About
Route::get('/about', function () {
    return view('about');
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});

// Quotation
Route::get('/quotation', function () {
    return view('quotation');
});

// Admin
Route::get('/admin', function () {
    return view('admin.home');
})->middleware('admin');

// Admin Insights
Route::get('admin/insights', [AdminInsightController::class, 'index'])->middleware('admin');
Route::post('admin/insights', [AdminInsightController::class, 'store'])->middleware('admin');
Route::get('admin/insights/create', [AdminInsightController::class, 'create'])->middleware('admin');
Route::patch('admin/insights/{insight:id}', [AdminInsightController::class, 'update'])->middleware('admin');
Route::delete('admin/insights/{insight:id}', [AdminInsightController::class, 'destroy'])->middleware('admin');
Route::get('admin/insights/{insight:id}/edit', [AdminInsightController::class, 'edit'])->middleware('admin');

// Admin Services
Route::get('admin/services', [AdminServiceController::class, 'index'])->middleware('admin');
Route::post('admin/services', [AdminServiceController::class, 'store'])->middleware('admin');
Route::get('admin/services/create', [AdminServiceController::class, 'create'])->middleware('admin');
Route::patch('admin/services/{project:id}', [AdminServiceController::class, 'update'])->middleware('admin');
Route::delete('admin/services/{project:id}', [AdminServiceController::class, 'destroy'])->middleware('admin');
Route::get('admin/services/{project:id}/edit', [AdminServiceController::class, 'edit'])->middleware('admin');

// Admin Projects
Route::get('admin/projects', [AdminProjectController::class, 'index'])->middleware('admin');
Route::post('admin/projects', [AdminProjectController::class, 'store'])->middleware('admin');
Route::get('admin/projects/create', [AdminProjectController::class, 'create'])->middleware('admin');
Route::patch('admin/projects/{projects:id}', [AdminProjectController::class, 'update'])->middleware('admin');
Route::delete('admin/projects/{projects:id}', [AdminProjectController::class, 'destroy'])->middleware('admin');
Route::get('admin/projects/{projects:id}/edit', [AdminProjectController::class, 'edit'])->middleware('admin');


// Register
Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

// Login
Route::get('/login',[LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'store'])->middleware('guest');
Route::post('/logout',[LoginController::class, 'destroy'])->middleware('auth');


