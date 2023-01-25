<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;

class InsightController extends Controller {
    public function index() {
        return view('insights', [
            'insights' => Insight::latest()->get()
        ]);
    }

    public function show(Insight $insight) {
        return view('insight', [
            'insight' => $insight
        ]);
    }
}
