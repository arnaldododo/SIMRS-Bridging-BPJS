<?php

namespace App\Traits;

trait ApiResponser
{
    protected function successResponse($data, $message, $code = 200)
    {
        return response()->json([
            'response' => $data,
            'metadata' => [
                'message' => $message,
                'code' => $code,
            ]
        ]);
    }

    protected function errorResponse($message = null, $code = 404)
    {
        return response()->json([
            'metadata' => [
                'message' => $message,
                'code' => $code,
            ]
        ]);
    }
}
