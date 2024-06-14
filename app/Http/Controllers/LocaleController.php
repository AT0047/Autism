<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    
    public function changeLocale($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            abort(404);
        }
        Session::put('locale', $locale);

        return Redirect()->back();
    }
}
