<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class EnsureFrontendRequestsAreStateful
{
    public function handle(Request $request, \Closure $next)
    {
        // Lógica para asegurar que las solicitudes frontend sean stateful
        return $next($request);
    }
}
