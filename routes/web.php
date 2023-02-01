<?php

use App\Models\Insight;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminInsightController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminTestimonialController;

Route::get('/', function () {
    return view('home', [
        'testimonials' => Testimonial::all(),
        'projects' => Project::all(),
        'insights' => Insight::latest()->get(),
    ]);
});

// Services
Route::get('/services', [ServiceController::class, 'index']);

// Projects
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{project:id}', [ProjectController::class, 'show']);

// Insights
Route::get('/insights', [InsightController::class, 'index'])->name('insights');
Route::get('/insight/{insight:slug}', [InsightController::class, 'show'])->name('insights');

// About
Route::get('/about', function () {
    return view('about');
});

// Contact
Route::get('/contact', function () {
    return view('contact', [
        'testimonials' => Testimonial::latest()->get()
    ]);
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
Route::patch('admin/services/{service:id}', [AdminServiceController::class, 'update'])->middleware('admin');
Route::delete('admin/services/{service:id}', [AdminServiceController::class, 'destroy'])->middleware('admin');
Route::get('admin/services/{service:id}/edit', [AdminServiceController::class, 'edit'])->middleware('admin');

// Admin Projects
Route::get('admin/projects', [AdminProjectController::class, 'index'])->middleware('admin');
Route::post('admin/projects', [AdminProjectController::class, 'store'])->middleware('admin');
Route::get('admin/projects/create', [AdminProjectController::class, 'create'])->middleware('admin');
Route::patch('admin/projects/{project:id}', [AdminProjectController::class, 'update'])->middleware('admin');
Route::delete('admin/projects/{project:id}', [AdminProjectController::class, 'destroy'])->middleware('admin');
Route::get('admin/projects/{project:id}/edit', [AdminProjectController::class, 'edit'])->middleware('admin');

// Admin Projects
Route::get('admin/testimonials', [AdminTestimonialController::class, 'index'])->middleware('admin');
Route::post('admin/testimonials', [AdminTestimonialController::class, 'store'])->middleware('admin');
Route::get('admin/testimonials/create', [AdminTestimonialController::class, 'create'])->middleware('admin');
Route::patch('admin/testimonials/{testimonial:id}', [AdminTestimonialController::class, 'update'])->middleware('admin');
Route::delete('admin/testimonials/{testimonial:id}', [AdminTestimonialController::class, 'destroy'])->middleware('admin');
Route::get('admin/testimonials/{testimonial:id}/edit', [AdminTestimonialController::class, 'edit'])->middleware('admin');


// Register
Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

// Login
Route::get('/login',[LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'store'])->middleware('guest');
Route::post('/logout',[LoginController::class, 'destroy'])->middleware('auth');


// Email
Route::post('/send-email',QuoteController::class)->name('send.email');
