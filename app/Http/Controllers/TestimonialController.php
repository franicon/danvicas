<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller {
    public function index() {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::paginate(6)
        ]);
    }

}
