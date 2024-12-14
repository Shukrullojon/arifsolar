<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $lang = $request->route('lang'); // Get the 'lang' parameter from the route
        if (in_array($lang, ['uz', 'ru'])) {
            App::setLocale($lang); // Set application locale
            Session::put('locale', $lang); // Save locale in the session
        }
        return $next($request);
    }
}
