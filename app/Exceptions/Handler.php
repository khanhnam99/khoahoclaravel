<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use Response;
use Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {


        });

        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('acp/*')) {
                return 404;
                //return redirect()->route('backend.dashboard.index');
            }
        });


        $this->renderable(function (MethodNotAllowedHttpException $e, $request) {
            if ($request->is('acp/*')) {
                return redirect()->route('backend.dashboard.index');
            }
        });

    }


    public function render($request, Throwable $exception){

        $status = $exception->getStatusCode();
        dd($status);
        if ($exception instanceof NotFoundHttpException) {
            echo 'me not found';
            exit;
            return response()->view('errors.404', [], 404);
        }
    }


//    public function render($request, Throwable $exception){
//
//        // dành cho admin
//        if ($request->is('acp/*')) {
//            if ($exception instanceof MethodNotAllowedHttpException) {
//                return redirect()->route('backend.dashboard.index');
//            }
//        }
//
//
//        if ($request->is('api/*')) {
//
//        }
//    }
}
