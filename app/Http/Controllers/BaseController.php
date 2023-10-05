<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function root()
    {
        if (auth()->user()) {
            return redirect()->route('home');
        }
        
        return view('auth.login');
    }
}
