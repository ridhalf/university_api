<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login']]);
    }
    public function login(Request $request)
    {
        $username = trim($request->header('x-username'));
        $password = trim($request->header('x-password'));
        $request->merge([
            'username' => $username,
            'password' => $password
        ]);
        $credentials = $request->only(['username', 'password']);
        if (!$token = Auth::attempt($credentials)) {
            return $this->respondError('Password atau username tidak sesuai', 400, 'BAD_REQUEST');
        }
        return $this->respondWithToken($token);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return $this->respondSuccess(null, 'Logout sukses');
    }
}
