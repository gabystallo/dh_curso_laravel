<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use Illuminate\Foundation\Testing\HttpException;

class ValidarAdmin
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

        if(Auth::user()->rol<1) {
            return redirect('http://google.com');
        }

        return $next($request);
    }
}
