<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(User $user)
    {
        return response()->json($user, 200);
    }
}
