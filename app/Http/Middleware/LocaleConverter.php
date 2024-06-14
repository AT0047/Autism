<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class LocaleConverter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!in_array($request->segment(1), ['en', 'ar'])) {
        //     abort(404);
        // }
        // App::setLocale($request->segment(1));
        // Session::put('locale', $request->segment(1));
        // URL::defaults(['locale' => $request->segment(1)]);

        App::setLocale(session('locale',config('app.locale')));
        return $next($request);
    }
}
