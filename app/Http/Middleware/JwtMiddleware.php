<?php


namespace App\Http\Middleware;

use JWTAuth;
use Exception;
use Closure;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use App\Helpers\ResponseHelper;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle( $request, Closure $next )
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if ( !$user ) {
                return ResponseHelper::error('User Not Found', null);
            }
        } catch ( Exception $e ) {
            if ( $e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException ) {
                return ResponseHelper::error('Token Invalid', null);
            } else {
                if ( $e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException ) {
                    return ResponseHelper::error('Token Expired', null);
                } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
                    return ResponseHelper::error(['status' => 'Token is Blacklisted'], null);
                }else {
                    if ( $e->getMessage() === 'User Not Found' ) {
                        return ResponseHelper::error('User Not Found', null);
                    }
                    return ResponseHelper::error('Authorization Token not found', null);
                }
            }
        }

        return $next($request);
    }
}
