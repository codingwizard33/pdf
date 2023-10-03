<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class UserCreateService
{
    use HasRoles;

    protected $name;
    protected $email;
    // protected $password;
    protected $organization;
    protected $userName;
    protected $role;

    public function __construct($data)
    {
        $this->name = $data['first_name'] . ' ' . $data['last_name'];
        $this->email = $data['email'];
        // $this->password = Hash::make($data['password']);
        $this->organization = $data['organization'];
        $this->userName = $data['user_name'];
        $this->role = $data['role'];
    }

    public function createUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            // 'password' => $this->password,
            'organization' => $this->organization,
            'user_name' => $this->userName,
        ])->assignRole($this->role);
    }
}
