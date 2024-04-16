<?php
namespace App\Http\Traits\Api;

use App\Http\Traits\Api\ApiResponse;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ApiException
{
    use ApiResponse;
    public static function apiException($e)
    {

        if ($e instanceof NotFoundHttpException) {
            return ApiResponse::apiResponse(null, __('http-statuses.404'), 404);
        }
        if ($e instanceof ModelNotFoundException) {
            return ApiResponse::apiResponse(null, __('http-statuses.404'), 404);
        }
        // if ($e instanceof QueryException) {
        //     return ApiResponse::apiResponse(null, __('main.something_went_wrong'), 500);
        // }
        if ($e instanceof AuthorizationException) {
            return ApiResponse::apiResponse(null, __('http-statuses.401'), 401);
        }
        if ($e instanceof AccessDeniedHttpException) {
            return ApiResponse::apiResponse(null, __('http-statuses.401'), 401);
        }
        if ($e instanceof AuthenticationException) {
            return ApiResponse::apiResponse(null, __('http-statuses.401'), 401);
        }
        if ($e instanceof HttpException && $e->getStatusCode() === 403) {
            return ApiResponse::apiResponse(null, 'Your email address is not verified.', 403);
        }
    }
}