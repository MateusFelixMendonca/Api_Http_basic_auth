<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CorrelationIdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //checa se existe, se nao cria um 
        $correlationId = $request->header('X-Correlation-ID') ? : Str::uuid()->toString();

        //set the header for the request
        $request->headers->set('X-Correlation-ID', $correlationId);

        //proceed with the request
        $response = $next($request);

        //set the correlation id to the response header
        $response->headers->set('X-Correlation-ID', $correlationId);

        //returns the response
        return $response;
    }
}
