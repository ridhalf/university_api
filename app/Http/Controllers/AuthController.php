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
            return response()->json([
                'message' => 'username atau password tidak sesuai'
            ]);
        }
        return $this->respondWithToken($token);
    }

    public function logout(Request $request)
    {


        auth()->logout();

        return response()->json([
            'code' => 200,
            'status' => 'OK',
            'message' => 'logout sukses'
        ]);
    }
}
