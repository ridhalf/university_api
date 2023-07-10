<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function respondWithToken($token)
    {
        return response()->json([
            'code' => 200,
            'status' => 'OK',
            'data' => [
                'token' => $token
            ]
        ]);
    }
}
