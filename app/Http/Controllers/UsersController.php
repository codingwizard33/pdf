<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class UsersController extends Controller
{
    use HasRoles;
    
    public function getUsers()
    {
        $roles = Role::all();
        $users = User::role('user')->get();
        return view('pages.users', [
            'roles' => $roles,
            'users' => $users
        ]);
    }
}
