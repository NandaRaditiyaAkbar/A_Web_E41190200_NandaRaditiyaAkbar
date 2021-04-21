<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StarSession
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        //
    }
}

