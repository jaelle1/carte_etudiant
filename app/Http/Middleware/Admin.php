<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Models;

class Admin
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request, )
    {
        if (! $request->expectsJson()) {
            if (User::all()->count() == 0) {
                return route('register');
            }
            else {
                return route('login');
            }
        }
    }
}

