<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function createUser()
    {
        return view('pages.add-user');
    }
}
