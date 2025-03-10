<?php

use App\Http\Controllers\ApiTestController;
use Illuminate\Support\Facades\Route;

Route::get('test/success', [ApiTestController::class, 'success']);
Route::get('test/created', [ApiTestController::class, 'created']);
Route::get('test/accepted', [ApiTestController::class, 'accepted']);
Route::get('test/no-content', [ApiTestController::class, 'noContent']);
Route::get('test/bad-request', [ApiTestController::class, 'badRequest']);
Route::get('test/unauthorized', [ApiTestController::class, 'unauthorized']);
Route::get('test/forbidden', [ApiTestController::class, 'forbidden']);
Route::get('test/not-found', [ApiTestController::class, 'notFound']);
Route::get('test/teapot', [ApiTestController::class, 'teapot']);
Route::get('test/unprocessable', [ApiTestController::class, 'unprocessable']);
Route::get('test/too-many-requests', [ApiTestController::class, 'tooManyRequests']);
Route::get('test/server-error', [ApiTestController::class, 'serverError']);
Route::get('test/api-custom-response', [ApiTestController::class, 'apiCustomResponse']);
