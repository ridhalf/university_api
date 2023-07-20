<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class KelasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = JWTAuth::parseToken()->authenticate();
        if ($user->kelas_id != $request->input('kelas_id')) {
            return response()->json([
                'code' => 401,
                'status' => 'UNAUTHORIZED',
                'errors' => 'anda tidak memiliki akses untuk kelas ini'
            ], 401);
        }
        return $next($request);
    }
}
