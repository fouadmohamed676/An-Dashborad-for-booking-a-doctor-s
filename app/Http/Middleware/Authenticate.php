<?php

namespace App\Http\Middleware;

use Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // return route('user.login');
            if (Request::is('user/*'))
                return route('user.login');
            else
                return route('login');
            }
    }
}
