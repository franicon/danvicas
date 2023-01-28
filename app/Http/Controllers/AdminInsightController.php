<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;

class AdminInsightController extends Controller {

    public function index() {
        return view('admin.insights.index', [
            'insights' => Insight::paginate(50)
        ]);
    }
}
