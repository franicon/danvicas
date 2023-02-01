<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class InsightController extends Controller {
    public function index() {
        return view('insight.index', [
            'insights' => Insight::paginate(6),
            'testimonials' => Testimonial::latest()->get()
        ]);
    }

    public function show(Insight $insight) {
        return view('insight.show', [
            'insight' => $insight
        ]);
    }
}
