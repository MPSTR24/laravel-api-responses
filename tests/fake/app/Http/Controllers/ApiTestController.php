<?php

namespace App\Http\Controllers;

use Mpstr24\APIResponses\Traits\ApiResponseTrait;

class ApiTestController extends Controller
{
    use ApiResponseTrait;

    public function success()
    {
        return $this->apiSuccess();
    }

    public function created()
    {
        return $this->apiCreated();
    }

    public function accepted()
    {
        return $this->apiAccepted();
    }

    public function noContent()
    {
        return $this->apiNoContent();
    }

    public function badRequest()
    {
        return $this->apiBadRequest();
    }

    public function unauthorized()
    {
        return $this->apiUnauthorized();
    }

    public function forbidden()
    {
        return $this->apiForbidden();
    }

    public function notFound()
    {
        return $this->apiNotFound();
    }

    public function teapot()
    {
        return $this->apiTeapot();
    }

    public function unprocessable()
    {
        return $this->apiUnprocessable();
    }

    public function tooManyRequests()
    {
        return $this->apiTooManyRequests();
    }

    public function serverError()
    {
        return $this->apiInternalServerError();
    }

    public function apiCustomResponse()
    {
        return $this->apiCustom('Custom', null, 201);
    }
}
