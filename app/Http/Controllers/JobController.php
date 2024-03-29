<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function makeJob()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();

        return view('pages.job', [
            'jobs' => $jobs
        ]);
    }
}
