<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        
$jobs = Job::with('employer')->paginate(10);
return view('jobs.index', ['jobs' => $jobs]);

    }
public function create() {}
public function show(Job $job) {}
public function store() {}
public function edit(Job $job) {}
public function update(Job $job) {}
public function destroy(Job $job) {}
}
