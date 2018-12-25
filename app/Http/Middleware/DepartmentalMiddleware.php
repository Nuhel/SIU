<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;
use Illuminate\Contracts\Auth\Guard;

class DepartmentalMiddleware
{ /**
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
        if ($this->auth->getUser()->accesscode == "CSE133"||$this->auth->getUser()->accesscode == "BBA133"||$this->auth->getUser()->accesscode == "LLB133"||$this->auth->getUser()->accesscode == "ENG133"||$this->auth->getUser()->accesscode == "ECE133") {
           //Authorized
        }
        else{
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
