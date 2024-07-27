<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * Return a new JSON response from the application.
     *
     * @param  mixed  $data
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($data = null, int $status = 200, array $headers = [], int $options = 0): JsonResponse
    {
        return response()->json($data, $status, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 200 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 200, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 201 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function created($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 201, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 204 status.
     *
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function noContent(array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response(null, 204, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 400 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function badRequest($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 400, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 401 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function unauthorized($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 401, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 403 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function forbidden($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 403, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 404 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function notFound($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 404, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 409 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function conflict($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 409, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 422 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function unprocessableEntity($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 422, $headers, $options);
    }

    /**
     * Return a new JSON response from the application with a 500 status.
     *
     * @param  mixed  $data
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */

    public function internalServerError($data = null, array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, 500, $headers, $options);
    }
}