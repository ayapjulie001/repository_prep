<?php

use TopHomes\Common\Exceptions\InvalidCredentialException;
use TopHomes\Common\Exceptions\UnauthorizedException;
use TopHomes\Common\Exceptions\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * init ErrorResponse instance
 */
$response = App::make('ErrorResponse');

/**
 * handle errors for not found resources such as undeclared routes
 */
App::pushError(function (NotFoundHttpException $exception) use ($response) {

//    if (Request::ajax() || Request::wantsJson())
        return $response->respondNotFound();
//    else
//        return View::make('Common.main.error');
});


/**
 * handle validation errors of request data
 */
App::pushError(function (ValidationException $exception) use ($response) {

    return $response->respondWithValidationErrors($exception->toArray());
});

/**
 * handle invalid credential error when attempting login
 */
App::pushError(function (InvalidCredentialException $exception) use ($response) {

    if (Request::ajax() || Request::wantsJson())
        return $response->respondUnauthorized($exception->getMessage(), 'invalid_credential');
//    else
//        return View::make('Common.main.error');
});

/**
 * handle unauthorized exception when trying to access off limit functions
 */
App::pushError(function (UnauthorizedException $exception) use ($response) {
    if (Request::ajax() || Request::wantsJson())
        return $response->respondUnauthorized($exception->getMessage());
//    else
//        return View::make('Common.main.error');
});

/**
 * handle internal server exceptions
 */
//App::pushError(function (Exception $exception) use ($response) {
//
//    Log::error($exception);
//
////    if (Request::ajax() || Request::wantsJson())
//    return $response->respondInternalServer();
////    else
////        return View::make('Common.main.error');
//});
