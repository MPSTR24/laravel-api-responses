<?php

declare(strict_types=1);

namespace Mpstr24\APIResponses\Traits;

use Illuminate\Http\JsonResponse;

// @phpstan-ignore trait.unused
trait ApiResponseTrait
{

    private function response(?string $message = null, $data = null, int $statusCode = 200): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    //--------------------------------------------------HTTP 200 Codes--------------------------------------------------

    private function apiSuccess($message = 'Success', $data = null): JsonResponse
    {
        return $this->response($message, $data, 200);
    }

    private function apiCreated($message = 'Created', $data = null): JsonResponse
    {
        return $this->response($message, $data, 201);
    }

    private function apiAccepted($message = 'Accepted', $data = null): JsonResponse
    {
        return $this->response($message, $data, 202);
    }

    private function apiNoContent(): JsonResponse
    {
        return $this->response(null, null, 204);
    }


    //--------------------------------------------------HTTP 400 Codes--------------------------------------------------

    private function apiBadRequest($message = 'Bad Request', $data = null): JsonResponse
    {
        return $this->response($message, $data, 400);
    }

    private function apiUnauthorized($message = 'Unauthorized', $data = null): JsonResponse
    {
        return $this->response($message, $data, 401);
    }

    private function apiForbidden($message = 'Forbidden', $data = null): JsonResponse
    {
        return $this->response($message, $data, 403);
    }

    private function apiNotFound($message = 'Not Found', $data = null): JsonResponse
    {
        return $this->response($message, $data, 404);
    }

    private function apiTeapot($message = "I'm a teapot", $data = null): JsonResponse
    {
        return $this->response($message, $data, 418);
    }

    private function apiUnprocessable($message = 'Unprocessable Content', $data = null): JsonResponse
    {
        return $this->response($message, $data, 422);
    }

    private function apiTooManyRequests($message = 'Too many requests', $data = null): JsonResponse
    {
        return $this->response($message, $data, 429);
    }

    //--------------------------------------------------HTTP 500 Codes--------------------------------------------------

    private function apiInternalServerError($message = 'Server Error', $data = null): JsonResponse
    {
        return $this->response($message, $data, 500);
    }

    //--------------------------------------------------HTTP 500 Codes--------------------------------------------------

    private function apiCustom($message = null, $data = null, $statusCode = 200): JsonResponse
    {
        return $this->response($message, $data, $statusCode);
    }

}
