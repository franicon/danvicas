<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    public function index() {
        return view('projects', [
            'projects' => Project::all()
        ]);
    }

    public function show(Project $project) {
        return view('project', [
            'project' => $project
        ]);
    }
}
