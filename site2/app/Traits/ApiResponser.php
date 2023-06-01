<?php

namespace App\Traits;
use Illuminate\Http\Response;
trait ApiResponser
{
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json([
            'site' => 2, 
            'data' => $data], 
            $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json([
            'site' => 2, 
            'error' => $message, 
            'code' => $code],
            $code);
    }

    public function errorNotFound($id, $message, $code) {
        return response()->json([
            'id' => $id,
            'error' => $message,
            'code' => $code],
            $code
        );
    }

    public function serverError($message, $code = Response::HTTP_INTERNAL_SERVER_ERROR) {
        return response->json([
            'error' => $message,
            'code' => $code]
            );
    }
}