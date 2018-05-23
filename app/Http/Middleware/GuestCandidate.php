<?php

namespace ReclutaTI\Http\Middleware;

use Auth;
use Closure;

class GuestCandidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return back();
        }

        return $next($request);
    }
}
