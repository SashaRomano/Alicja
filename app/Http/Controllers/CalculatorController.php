<?php

namespace App\Http\Controllers;

use App\RuLevel;
use App\UkLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CalculatorController extends Controller
{
    public function show($language)
    {
        App::setLocale($language);
        session()->put('language', $language);

        if ($language == 'ru'){
            $levels = RuLevel::all();
        }else{
            $levels = UkLevel::all();
        }
        return view('/calculator', ['levels' => $levels, 'language' => $language]);
    }
}
