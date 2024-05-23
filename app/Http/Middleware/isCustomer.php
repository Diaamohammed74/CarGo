<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UsersTypes;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isCustomer
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->type->value == UsersTypes::CUSTOMER->value) {
            return $next($request);
        }
        return response(view('dashboard.errors.403'), 403);
    }
}
