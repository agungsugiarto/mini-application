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

        app('Psr\Log\LoggerInterface')->debug([
            'request' => \Laminas\Diactoros\Request\ArraySerializer::toArray($request),
            'response' => \Laminas\Diactoros\Response\ArraySerializer::toArray($response),
            'session' => $request->getAttribute('session')?->all(),
        ]);

        return $response;
    }
}
