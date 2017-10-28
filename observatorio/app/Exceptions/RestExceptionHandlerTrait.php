<?php

namespace observatorio\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

trait RestExceptionHandlerTrait
{
    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request   $request
     * @param Exception $e
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Exception $e)
    {
        switch (true) {
            case $this->isAuthRequiredException($e):
                $retval = $this->authRequired(trans('exception.auth.required'));
                break;
            case $this->isPermissionLevelException($e):
                $retval = $this->permissionLevel(trans('exception.auth.level'));
                break;
            case $this->isValidationException($e):
                $retval = $this->validation(trans('exception.auth.validation'), $e->getResponse()->getData());
                break;
            default:
                $retval = $this->badRequest();
        }

        return $retval;
    }

    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int    $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($message = 'Bad request', $statusCode = 400)
    {
        return $this->jsonResponse(['error' => $message], $statusCode);
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int    $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function authRequired($message, $statusCode = 401)
    {
        return $this->jsonResponse(['error' => $message, 'code' => 13], $statusCode);
    }

    protected function permissionLevel($message, $statusCode = 403)
    {
        return $this->jsonResponse(['error' => $message], $statusCode);
    }

    protected function validation($message, $fields, $statusCode = 422)
    {
        return $this->jsonResponse(['error' => $message, 'fields' => $fields], $statusCode);
    }

    /**
     * Returns json response.
     *
     * @param array|null $payload
     * @param int        $statusCode
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function jsonResponse(array $payload = null, $statusCode = 404)
    {
        $payload = $payload ?: [];

        return response()->json($payload, $statusCode);
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Exception $e
     *
     * @return bool
     */
    protected function isAuthRequiredException(Exception $e)
    {
        return $e instanceof AuthRequiredException;
    }

    protected function isPermissionLevelException(Exception $e)
    {
        return $e instanceof PermissionLevelException;
    }

    protected function isValidationException(Exception $e)
    {
        return $e instanceof ValidationException;
    }
}
