<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;
     public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if ($this->auth->getUser()->accesscode !== "AU133") {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

}
