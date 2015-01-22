<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


class ErrorResponse extends ApiResponse
{
    const HTTP_BAD_REQUEST = 400; //The request is malformed, such as if the body does not parse
    const HTTP_UNAUTHORIZED = 401; //When no or invalid authentication details are provided. Also useful to trigger an auth popup if the API is used from a browser
    const HTTP_FORBIDDEN = 403; //When authentication succeeded but authenticated user doesn't have access to the resource
    const HTTP_NOT_FOUND = 404; //When a non-existent resource is requested
    const HTTP_INTERNAL_SERVER_ERROR = 500; //Internal Server Error
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    public function respondNotFound($message = 'Resource not found', $type = 'not_found')
    {
        return $this
            ->setStatusCode(self::HTTP_NOT_FOUND)
            ->respondWithError($type, $message);
    }

    public function respondUnauthorized($message, $type = 'unauthorized')
    {
        return $this
            ->setStatusCode(self::HTTP_UNAUTHORIZED)
            ->respondWithError($type, $message);
    }

    public function respondBadRequest($message = 'Bad Request', $type = 'bad_request')
    {
        return $this
            ->setStatusCode(self::HTTP_BAD_REQUEST)
            ->respondWithError($type, $message);
    }

    public function respondInternalServer($message = 'Sorry for inconvenience', $type = 'internal_server')
    {
        return $this
            ->setStatusCode(self::HTTP_INTERNAL_SERVER_ERROR)
            ->respondWithError($type, $message);
    }

    public function respondWithError($type, $message)
    {
        return $this->respond(['errors' => [$type => $message]]);
    }

    public function respondWithValidationErrors($errors)
    {
        return $this
            ->setStatusCode(self::HTTP_UNPROCESSABLE_ENTITY)
            ->respond(['errors' => $errors]);
    }
} 