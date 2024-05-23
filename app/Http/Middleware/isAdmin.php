<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UsersTypes;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->type->value == UsersTypes::ADMIN->value) {
            return $next($request);
        }
        return to_route('dashboard.login');
    }
}
