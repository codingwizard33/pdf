<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Services\UserCreateService;
use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    public function createUser(UserCreateRequest $request)
    {
        $user = $request->validated(); //dd($user);

        $createUser = new UserCreateService($user);
        $createUser->createUser();

        return redirect()->route('create-user')->with(['message' => 'Success!']);
    }
}
