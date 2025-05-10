<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    protected array $availableLocales = ['ru', 'en', 'turk'];

//    public function handle(Request $request, Closure $next): Response
//    {
//
//        // Check if a locale is provided in the URL
//        $locale = session('locale'); // Assumes the locale is the first segment of the URL
//
//        // Validate the locale against the available locales
//        if (in_array($locale, $this->availableLocales)) {
//            app()->setLocale($locale);
//        }
//
//        return $next($request);
//    }

    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('locale', config('app.locale')); // fallback to default locale
        if (in_array($locale, $this->availableLocales)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale(config('app.locale')); // default language from config/app.php
        }

        return $next($request);
    }

}
