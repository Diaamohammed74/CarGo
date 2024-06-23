<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isCustomer
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->type->value == 3) {
            return $next($request);
        }
        return to_route('auth.login');
    }
}
