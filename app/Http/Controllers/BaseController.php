<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function root()
    {
        return view('auth.login');
    }
}
