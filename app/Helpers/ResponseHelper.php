<?php

namespace App\Helpers;

class ResponseHelper
{

    public static $response = [
        'status' => 'success',
        'message' => '',
        'code' => 200,
        'data' => null,
    ];

    /**
     * @param null $message
     * @param null $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success( $message = null, $data = null, $code = 200 )
    {
        self::$response['data'] = $data;
        self::$response['status'] = 'success';
        self::$response['code'] = $code;
        self::$response['message'] = !empty($message) ? $message : '';
        return response()->json(self::$response);
    }

    /**
     * @param null $message
     * @param null $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error( $message = null, $data = null, $code = 201 )
    {
        self::$response['data'] = $data;
        self::$response['status'] = 'fail';
        self::$response['code'] = $code;
        self::$response['message'] = !empty($message) ? $message : '';
        return response()->json(self::$response);
    }

    public static function all($data,$code = 200){
        return response()->json($data,$code);
    }
}
