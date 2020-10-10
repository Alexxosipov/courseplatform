<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\Auth\User\UserResource;
use App\Models\User;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::whereEmail($request->get('email'))->first();

        if (!$user) {
            return response()->json([
                'error_type' => 'user_not_found',
                'errors' => [
                    'Credentials are invalid'
                ]
            ], 401);
        }

        if (!\Hash::check($request->get('password'), $user->password)) {
            return response()->json([
                'error_type' => 'user_not_found',
                'errors' => [
                    'Credentials are invalid'
                ]
            ], 401);
        }

        $token = $user->createToken('web')->plainTextToken;
        return (new UserResource($user))->withAccessToken($token);
    }
}
