<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LembagaMiddleware
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
        if(auth()->user()->role == 'lp'){
            return $next($request);
        }

        // abort(403);
        return redirect()->to('/home');
    }
}
