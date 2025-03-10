<?php

namespace Mpstr24\APIResponses\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{

    private function response(string $message, $data = null, int $statusCode = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    //--------------------------------------------------HTTP 200 Codes--------------------------------------------------

    private function apiSuccess($message, $data): JsonResponse
    {
        return $this->response($message, $data, 200);
    }

    private function apiCreated($message, $data): JsonResponse
    {
        return $this->response($message, $data, 201);
    }

    private function apiAccepted($message, $data): JsonResponse
    {
        return $this->response($message, $data, 202);
    }

    private function apiNoContent(): JsonResponse
    {
        return $this->response(null, null, 204);
    }


    //--------------------------------------------------HTTP 400 Codes--------------------------------------------------

    private function apiBadRequest($message, $data): JsonResponse
    {
        return $this->response($message, $data, 400);
    }

    private function apiUnauthorized($message, $data): JsonResponse
    {
        return $this->response($message, $data, 401);
    }

    private function apiForbidden($message, $data): JsonResponse
    {
        return $this->response($message, $data, 403);
    }

    private function apiNotFound(): JsonResponse
    {
        return $this->response(null, null, 404);
    }

    private function apiTeapot(): JsonResponse
    {
        return $this->response(null, null, 418);
    }

    private function apiUnprocessable(): JsonResponse
    {
        return $this->response(null, null, 422);
    }

    private function apiTooManyRequests(): JsonResponse
    {
        return $this->response(null, null, 429);
    }

    //--------------------------------------------------HTTP 500 Codes--------------------------------------------------

    private function apiInternalServerError(): JsonResponse
    {
        return $this->response(null, null, 500);
    }
}
