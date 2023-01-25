<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin {

    public function handle(Request $request, Closure $next) {

        if (auth()->user()?->email !== 'info@danvicas.com') {
            abort(Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
