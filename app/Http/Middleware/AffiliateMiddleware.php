<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AffiliateMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guard('affiliates')->check()){
            return $next($request);
        }else{
            return redirect()->route('affiliate_login');
        }
        return $next($request);
    }
}
