<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
{

    public function handle($request, Closure $next)
    {
        $token      = trim($request->header('x-token'));
        $username   = trim($request->header('x-username'));

        if (!$token) {
            return response()->json([
                'code' => 201,
                'status' => 'CREATED',
                'errors' => 'token tidak ditemukan pada request header'
            ], 201);
        } else {
            $request->headers->set('Authorization', 'Bearer ' . $token);
        }

        if (!$username) {
            return response()->json([
                'code' => 201,
                'status' => 'CREATED',
                'errors' => 'username tidak ditemukan pada request header'
            ], 201);
        }
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json([
                    'code' => 201,
                    'status' => 'CREATED',
                    'errors' => 'user tidak ditemukan'
                ]);
            }
            if ($user->username !== $username) {
                return response()->json([
                    'code' => 201,
                    'status' => 'CREATED',
                    'errors' => 'username pada request salah'
                ], 201);
            }
        } catch (TokenExpiredException $e) {
            return response()->json([
                'code' => 201,
                'status' => 'CREATED',
                'errors' => 'Token Expired'
            ], 201);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'code' => 201,
                'status' => 'CREATED',
                'errors' => 'Token Invalid'
            ], 201);
        }
        $request->auth = $user;
        return $next($request);
    }
}
