<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * Log a user out.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke()
    {
        $user = auth()->user();

        foreach ($user->tokens as $token) {
            $token->delete();
        }

        return response()->json('Logged out successfully', 200);
    }
}