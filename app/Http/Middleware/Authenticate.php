<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
        public function handle($req, Closure $next)
    {
        if ($req->session()->get('isLoggedIn')) {
            return $next($req);
        }

        return redirect('/')->with('error', 'You must be Logged In to access this page.');
    }

}
