<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    public function index() {
        return view('project.index', [
            'projects' => Project::paginate(6),
            'testimonials' => Testimonial::all(),
        ]);
    }

    public function show(Project $project) {
        return view('project.show', [
            'project' => $project,
            'projects' => Project::latest()->inRandomOrder()->get()
        ]);
    }
}
