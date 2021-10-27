<?php

namespace App\Http\Controllers;

use App\IndexRuContent;
use App\IndexUkContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/auth.login');
    }
}
