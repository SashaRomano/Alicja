<?php

namespace App\Http\Controllers;

use App\CoursesRu;
use App\CoursesUk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CoursesController extends Controller
{
    public function show($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        if ($language == 'ru'){
            $courses = CoursesRu::all();
        }else{
            $courses = CoursesUk::all();
        }
        return view('/courses', ['courses' => $courses, 'language' => $language]);
    }

    public function single_course($id, $language)
    {
        session()->put('id', $id);
        App::setLocale($language);
        session()->put('language', $language);
        if ($language == 'ru'){
            $course = CoursesRu::where('id', '=', $id)->first();
        }else{
            $course = CoursesUk::where('id', '=', $id)->first();
        }
        return view('/single_course', ['course' => $course, 'language' => $language]);
    }
}
