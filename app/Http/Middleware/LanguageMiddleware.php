<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $lang = $request->route('lang');
        if (!$lang || !in_array($lang, ['uz', 'ru'])) {
            return redirect('/uz');
        }
        App::setLocale($lang);
        Session::put('locale', $lang);
        return $next($request);
    }
}
