<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isMethod('get') && $request->get("access") !== 'yes' || 
            $request->isMethod('post') && $request->post("access") !== 'yes' ||
            $request->isMethod('put') && $request->get("access") !== 'yes' ||
            $request->isMethod('delete') && $request->get("access") !== 'yes'
            ) {
            return response("HTTP 403 Forbidden", 403);
        }

        return $next($request);
    }
}
