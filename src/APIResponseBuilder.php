<?php

namespace Ispahbod\APIResponseBuilder;

use Illuminate\Http\JsonResponse;

class APIResponseBuilder
{
    public static function success($data = [], $message = "The operation was successful.", $code = 200, $additional = []): JsonResponse
    {
        return self::buildResponse(true, $message, $data, $code, $additional);
    }

    public static function error($message = "An error has occurred. Please try again.", $errors = [], $code = 400, $additional = []): JsonResponse
    {
        return self::buildResponse(false, $message, [], $code, $additional, $errors);
    }

    public static function invalidData($message = "The provided data is invalid or incorrect.", $errors = [], $code = 422, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function incompleteData($message = "The provided data is incomplete.", $errors = [], $code = 422, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function created($message = "The resource was created successfully.", $data = [], $code = 201, $additional = []): JsonResponse
    {
        return self::success($data, $message, $code, $additional);
    }

    public static function deleted($message = "The resource was deleted successfully.", $code = 204, $additional = []): JsonResponse
    {
        return self::success([], $message, $code, $additional);
    }

    public static function updated($message = "The resource was updated successfully.", $data = [], $code = 200, $additional = []): JsonResponse
    {
        return self::success($data, $message, $code, $additional);
    }

    public static function unauthorized($message = "Unauthorized access detected. Access is denied.", $code = 401, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function notFound($message = "The requested resource could not be found.", $code = 404, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function forbidden($message = "Access to this resource is forbidden.", $code = 403, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function badRequest($message = "The request could not be understood by the server due to malformed syntax.", $errors = [], $code = 400, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function conflict($message = "The request could not be completed due to a conflict with the current state of the resource.", $errors = [], $code = 409, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function tooManyRequests($message = "Too many requests have been made in a short amount of time. Please try again later.", $code = 429, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function internalServerError($message = "The server encountered an unexpected condition which prevented it from fulfilling the request.", $errors = [], $code = 500, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function serviceUnavailable($message = "The server is currently unable to handle the request due to a temporary overloading or maintenance of the server.", $code = 503, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function paymentRequired($message = "Payment is required to access this resource.", $code = 402, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function methodNotAllowed($message = "The method specified in the request is not allowed for the resource identified by the request URI.", $code = 405, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function notAcceptable($message = "The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.", $code = 406, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function proxyAuthenticationRequired($message = "The client must first authenticate itself with the proxy.", $code = 407, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function requestTimeout($message = "The client did not produce a request within the time that the server was prepared to wait.", $code = 408, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function gone($message = "The requested resource is no longer available at the server and no forwarding address is known.", $code = 410, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function lengthRequired($message = "The request did not specify the length of its content, which is required by the requested resource.", $code = 411, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function preconditionFailed($message = "The server does not meet one of the preconditions that the requester put on the request.", $code = 412, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function payloadTooLarge($message = "The request is larger than the server is willing or able to process.", $code = 413, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function uriTooLong($message = "The URI provided was too long for the server to process.", $code = 414, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function unsupportedMediaType($message = "The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.", $code = 415, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function upgradeRequired($message = "The client should switch to a different protocol such as TLS/1.0.", $code = 426, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function preconditionRequired($message = "The server requires that the request be conditional.", $code = 428, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function tooEarly($message = "The server is unwilling to risk processing a request that might be replayed.", $code = 425, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function networkAuthenticationRequired($message = "The client needs to authenticate to gain network access.", $code = 511, $additional = []): JsonResponse
    {
        return self::error($message, [], $code, $additional);
    }

    public static function registered($data = [], $message = "User has been successfully registered.", $code = 201): JsonResponse
    {
        return self::success($data, $message, $code, []);
    }

    public static function otpSent($data = [], $message = "OTP has been sent successfully.", $code = 200): JsonResponse
    {
        return self::success($data, $message, $code, []);
    }

    public static function tokenCreated($data = [], $message = "Token has been created successfully.", $code = 200): JsonResponse
    {
        return self::success($data, $message, $code, []);
    }

    public static function returnData($data = [], $message = "Data returned successfully.", $code = 200, $additional = []): JsonResponse
    {
        return self::success($data, $message, $code, $additional);
    }

    public static function fieldError($message = "There is an error with the input fields.", $errors = [], $code = 422, $additional = []): JsonResponse
    {
        return self::error($message, $errors, $code, $additional);
    }

    public static function paginationData($data = [], $offset = 0, $limit = 10): JsonResponse
    {
        $totalCount = count($data);
        $moreAvailable = ($totalCount > ($offset + $limit));
        $pagination = [
            'total' => $totalCount,
            'moreAvailable' => $moreAvailable,
            'currentOffset' => $offset,
            'nextOffset' => $moreAvailable ? ($offset + $limit) : null
        ];
        return self::success(data: $data, additional: [
            'pagination' => $pagination
        ]);
    }

    protected static function buildResponse($success, $message, $data, $code, $additional, $errors = []): JsonResponse
    {
        $response = [
            'success' => $success,
            'code' => $code,
            'message' => $message,
        ];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        if (!empty($additional)) {
            $response = array_merge($response, $additional);
        }

        return response()->json($response, $code);
    }
}