<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Illuminate\Support\Facades\Config;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * This function is to handle TokenMissmatch when uploading from 'laravel file manager'
     * if {{csrf_token()}} doesn't exist on js initialization
     * On Upload Menu
     */
    // public function handle($request, Closure $next)
    // {
    //     $regex = '#' . implode('|', $this->except) . '#';

    //     if ($this->isReading($request) || $this->tokensMatch($request) || preg_match($regex, $request->path())) {
    //         return $this->addCookieToResponse($request, $next($request));
    //     }

    //     throw new TokenMismatchException;
    // }	   
}
