<?php

use Mpstr24\APIResponses\Tests\TestCase;

/**
 * @covers \Mpstr24\APIResponses\Traits\ApiResponseTrait
 */
class APIResponsesTest extends TestCase
{
    public function test_api_success(): void
    {
        $response = $this->getJson('test/success');
        $response->assertSuccessful();
        $response->assertJson([
            'message' => 'Success',
            'data' => null,
        ]);
    }

    public function test_api_created(): void
    {
        $response = $this->getJson('test/created');
        $response->assertCreated();
        $response->assertJson([
            'message' => 'Created',
            'data' => null,
        ]);
    }

    public function test_api_accepted(): void
    {
        $response = $this->getJson('test/accepted');
        $response->assertAccepted();
        $response->assertJson([
            'message' => 'Accepted',
            'data' => null,
        ]);
    }

    public function test_api_no_content(): void
    {
        $response = $this->getJson('test/no-content');
        $response->assertNoContent();
    }

    public function test_api_bad_request(): void
    {
        $response = $this->getJson('test/bad-request');
        $response->assertBadRequest();
        $response->assertJson([
            'message' => 'Bad Request',
            'data' => null,
        ]);
    }

    public function test_api_unauthorized(): void
    {
        $response = $this->getJson('test/unauthorized');
        $response->assertUnauthorized();
        $response->assertJson([
            'message' => 'Unauthorized',
            'data' => null,
        ]);
    }

    public function test_api_forbidden(): void
    {
        $response = $this->getJson('test/forbidden');
        $response->assertForbidden();
        $response->assertJson([
            'message' => 'Forbidden',
            'data' => null,
        ]);
    }

    public function test_api_not_found(): void
    {
        $response = $this->getJson('test/not-found');
        $response->assertNotFound();
        $response->assertJson([
            'message' => 'Not Found',
            'data' => null,
        ]);
    }

    public function test_api_teapot(): void
    {
        $response = $this->getJson('test/teapot');
        $response->assertStatus(418);
        $response->assertJson([
            'message' => "I'm a teapot",
            'data' => null,
        ]);
    }

    public function test_api_unprocessable(): void
    {
        $response = $this->getJson('test/unprocessable');
        $response->assertUnprocessable();
        $response->assertJson([
            'message' => 'Unprocessable Content',
            'data' => null,
        ]);
    }

    public function test_api_too_many_requests(): void
    {
        $response = $this->getJson('test/too-many-requests');
        $response->assertTooManyRequests();
        $response->assertJson([
            'message' => 'Too many requests',
            'data' => null,
        ]);
    }

    public function test_api_server_error(): void
    {
        $response = $this->getJson('test/server-error');
        $response->assertServerError();
        $response->assertJson([
            'message' => 'Server Error',
            'data' => null,
        ]);
    }

    public function test_api_custom_response(): void
    {
        $response = $this->getJson('test/api-custom-response');
        $response->assertStatus(201);
        $response->assertJson([
            'message' => 'Custom',
            'data' => null,
        ]);
    }
}
