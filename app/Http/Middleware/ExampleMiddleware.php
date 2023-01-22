<?php

namespace App\Http\Middleware;

use Closure;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(ServerRequestInterface $request, Closure $next)
    {
        /** @var ResponseInterface */
        $response = $next($request);

        return $response;
    }
}
