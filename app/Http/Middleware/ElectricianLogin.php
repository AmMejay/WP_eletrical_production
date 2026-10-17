<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ElectricianLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()->role != 'electrician') {
           return response()->json(['error' => 'Não autorizado'])->setStatusCode(403);
        }
        return $next($request);
    }
}
