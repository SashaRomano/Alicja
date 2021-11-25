<?php

namespace App\Http\Controllers;

use App\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReqController extends Controller
{
    public function show($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/my.my_course');
    }

    public function save(Request $request, $language){
        $language = session('language');

        if($request->method() == 'POST'){
            $req = new Req();
            $req->message = $request->input('message');
            $req->name = $request->input('name');
            $req->phone = $request->input('phone');
            $req->connect = $request->input('connect');
            $req->save();

            return redirect(route('req-success', ['language' => $language]));
        }else{
            return redirect(route('index'));
        }
    }

    public function success($language){
        App::setLocale($language);
        session()->put('language', $language);

        return view('/my.my_course_success');
    }
}
