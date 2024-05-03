<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        if (!Auth::check()) {
            return Redirect::to('login');
        }
        
        $user = Auth::user();

        if ($user->level_id == $roles) {
            return $next($request);
        }
        
        return Redirect::to('login')->with('error', 'Maaf, Anda tidak memiliki akses');
    }
}
