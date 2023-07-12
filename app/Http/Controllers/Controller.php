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
    protected function respondError($message, $code, $status)
    {
        $result['code'] = $code;
        $result['status'] = $status;
        $result['errors'] = $message;
        return response()->json($result, $code);
    }
    protected function respondSuccess($data = null, $message = null)
    {
        $result['code'] = 200;
        $result['status'] = 'OK';

        if ($data != null) {
            $result['data'] = $data;
        }
        if ($message != null) {
            $result['message'] = $message;
        }
        return response()->json($result, 200);
    }
}
