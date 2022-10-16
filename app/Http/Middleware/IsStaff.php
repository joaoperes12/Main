<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IsStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && ($request->user()->role == 'P' || $request->user()->role == 'N' || $request->user()->role == 'A'))
            return $next($request);
        //return redirect()->route('403');
        throw new AccessDeniedHttpException('Unauthorized.');
    }
}
