<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store() {
        dd(request()->all());
        $attributes = request()->validate([
            'title' => 'required|min:5',
            'slug' => ['required', Rule::unique('insights', 'slug')],
            'body' => 'required |min:5'
        ]);

        Insight::create($attributes);

        return redirect('/insights');
    }
}
