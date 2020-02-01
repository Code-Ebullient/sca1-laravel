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
    public function handle($request, Closure $next, $Paid)
    {
        
        echo "Role: ".$Paid;
        return $next($request);
    }

    public function terminate($request, $response)
    {
        echo "No payment history recorded ";
    }
}
