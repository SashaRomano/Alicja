<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SimpleController extends Controller
{
    public function certificates($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/certificates');
    }

    public function intensive($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/intensive');
    }

    public function online($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/online');
    }

    public function contacts($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/contacts');
    }

    public function admin($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/admin.admin');
    }
}
