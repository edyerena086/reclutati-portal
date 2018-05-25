<?php

namespace ReclutaTI\Http\Middleware;

use Auth;
use Closure;

class AuthCandidate
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
        if (!Auth::check() || Auth::user()->user_group_id != 1) {
            return back();
        }

        return $next($request);
    }
}
