<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ApiResponse;

class MaintenanceModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(config('app.maintenance_mode')){
            return ApiResponse::error(
                'API is under Maintence. Please try again later.',
                503 //Service Unavailable
            );
        }

        return $next($request);
    }
}
