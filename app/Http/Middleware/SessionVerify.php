<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('user_type')){
            return $next($request);
        }
        else{
            $request->session()->flash('message', 'Invalid Request!');

                return redirect('/login')
                ->with([
                    'error' => true,
                    'message' => 'Please login first'
                ]);
        }
    }
}
