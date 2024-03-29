<?php

namespace App\Http\Middleware;

use Closure;

class CheckPCFT
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
        if (!auth()->guard('admin')->user()) {
            return redirect()->route('admin.login');
        }
        if(auth()->guard('admin')->user()->pcft)
            return $next($request);
        else{
            session()->flash('failed', 'Your Password is Temporary, Please change it to stay secure.');
            return redirect()->route('admin.password.change');
        }
    }
}
