<?php

namespace App\Http\Controllers;

use App\IndexRuContent;
use App\IndexUkContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class AdminIndexController extends Controller
{
    public function show($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        $ru_contents = IndexRuContent::all();
        $uk_contents = IndexUkContent::all();
        return view('/admin.admin_index', ['ru_contents' => $ru_contents, 'uk_contents' => $uk_contents]);
    }

    public function edit_save(Request $request, $language)
    {
        if($request->method() == 'POST'){
            App::setLocale($language);
            session()->put('language', $language);

            $ru_contents = new IndexRuContent();
            $ru_contents->us = $request->input('us_ru');
            $ru_contents->save();

            $uk_contents = new IndexUkContent();
            $uk_contents->us = $request->input('us_uk');
            $uk_contents->save();
            return \redirect()->route('/index', ['language' => $language]);
        }else{
            return \redirect()->route('/contacts', ['language' => $language]);
        }

}
}
