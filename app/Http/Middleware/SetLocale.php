<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!session()->has('locale')) {
            try {
                session()->put('locale', setting('default_language', 'en'));
            } catch (\Exception $e) {
                // If database is not ready or settings table is missing, fallback to 'en'
                session()->put('locale', 'en');
            }
        }

        app()->setLocale(session()->get('locale'));

        return $next($request);
    }
}
