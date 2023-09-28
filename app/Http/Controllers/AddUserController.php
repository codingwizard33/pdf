<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AddUserController extends Controller
{
    public function createUser()
    {
        $roles = Role::all();
        return view('pages.add-user', [
            'roles' => $roles
        ]);
    }
}
