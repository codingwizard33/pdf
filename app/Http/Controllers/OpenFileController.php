<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class OpenFileController extends Controller
{
    public function index($id)
    {
        $file = Job::where('id', $id)->first();

        return view('pages.pdf', [
            'file' => $file
        ]);
    }
}
