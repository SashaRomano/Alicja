<?php

namespace App\Http\Controllers;

use App\IndexRuContent;
use App\IndexUkContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function start($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        if ($language == 'ru'){
            $contents = IndexRuContent::all();
        }else{
            $contents = IndexUkContent::all();
        }
        return view('/index', ['contents' => $contents]);
    }

}
