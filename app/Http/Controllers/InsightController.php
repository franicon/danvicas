<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;

class InsightController extends Controller {
    public function index() {
        return view('insight.index', [
            'insights' => Insight::latest()->get()
        ]);
    }

    public function show(Insight $insight) {
        return view('insight.show', [
            'insight' => $insight
        ]);
    }

    public function create() {
        return view('insight.create');
    }
}
