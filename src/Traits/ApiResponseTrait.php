<?php

declare(strict_types=1);

namespace Mpstr24\APIResponses\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

// @phpstan-ignore trait.unused
trait ApiResponseTrait
{
    private function response(?string $message = null, mixed $data = null, int $statusCode = 200, array $meta = []): JsonResponse|Response
    {
        if ($statusCode === 204) {
            return response()->noContent();
        }

        $payload = [
            'message' => $message,
            'data' => $data,
            'meta' => array_merge(['status' => $statusCode], $meta),
        ];

        return response()->json($payload, $statusCode);
    }

    // --------------------------------------------------HTTP 200 Codes--------------------------------------------------

    protected function apiSuccess($message = 'Success', $data = null): JsonResponse
    {
        return $this->response($message, $data, 200);
    }

    protected function apiCreated($message = 'Created', $data = null): JsonResponse
    {
        return $this->response($message, $data, 201);
    }

    protected function apiAccepted($message = 'Accepted', $data = null): JsonResponse
    {
        return $this->response($message, $data, 202);
    }

    protected function apiNoContent(): Response
    {
        return $this->response(null, null, 204);
    }

    // --------------------------------------------------HTTP 400 Codes--------------------------------------------------

    protected function apiBadRequest($message = 'Bad Request', $data = null): JsonResponse
    {
        return $this->response($message, $data, 400);
    }

    protected function apiUnauthorized($message = 'Unauthorized', $data = null): JsonResponse
    {
        return $this->response($message, $data, 401);
    }

    protected function apiForbidden($message = 'Forbidden', $data = null): JsonResponse
    {
        return $this->response($message, $data, 403);
    }

    protected function apiNotFound($message = 'Not Found', $data = null): JsonResponse
    {
        return $this->response($message, $data, 404);
    }

    protected function apiTeapot($message = "I'm a teapot", $data = null): JsonResponse
    {
        return $this->response($message, $data, 418);
    }

    protected function apiUnprocessable($message = 'Unprocessable Content', $data = null): JsonResponse
    {
        return $this->response($message, $data, 422);
    }

    protected function apiTooManyRequests($message = 'Too many requests', $data = null): JsonResponse
    {
        return $this->response($message, $data, 429);
    }

    // --------------------------------------------------HTTP 500 Codes--------------------------------------------------

    protected function apiInternalServerError($message = 'Server Error', $data = null): JsonResponse
    {
        return $this->response($message, $data, 500);
    }

    // --------------------------------------------------HTTP 500 Codes--------------------------------------------------

    protected function apiCustom($message = null, $data = null, $statusCode = 200): JsonResponse
    {
        return $this->response($message, $data, $statusCode);
    }
}
