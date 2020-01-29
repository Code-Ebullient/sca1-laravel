<?php

namespace App\Http\Middleware;

use Closure;

class PaidUser
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
        echo "Paid: ".$paid;
        return $next($request);
    }

    // public function terminate($request, $reponse)
    // {
    //     echo "No payment history recorded ";
    // }
}
