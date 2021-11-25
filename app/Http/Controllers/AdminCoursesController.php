<?php

namespace App\Http\Controllers;

use App\CoursesRu;
use App\CoursesUk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminCoursesController extends Controller
{
    public function delete(Request $request, $language)
    {
        if($request->method() == 'DELETE'){


            $ru_course = CoursesRu::find($request->input('id'));
            $ru_course->delete();

            $uk_course = CoursesUk::find($request->input('id'));
            $uk_course->delete();

            if ($language == 'ru') {
                $courses = CoursesRu::all();
            } else {
                $courses = CoursesUk::all();
            }
            return view('/admin.admin_courses', ['courses' => $courses, 'language' => $language]);
        }else{
            App::setLocale($language);
            session()->put('language', $language);
            if ($language == 'ru') {
                $courses = CoursesRu::all();
            } else {
                $courses = CoursesUk::all();
            }
            return view('/admin.admin_courses', ['courses' => $courses, 'language' => $language]);
        }

    }

    public function add($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        return view('/admin.add_course', ['language' => $language]);
    }

    public function add_save(Request $request)
    {

        if ($request->method() == 'POST') {
            $ru_course = new CoursesRu();

            $ru_course->title = $request->input('title_ru');
            $ru_course->short_text_1 = $request->input('short_text_1_ru');
            $ru_course->link_1 = $request->input('link_1_ru');
            $ru_course->short_text_2 = $request->input('short_text_2_ru');
            $ru_course->meta_title = $request->input('meta_title_ru');
            $ru_course->meta_desctiption = $request->input('meta_description_ru');
            $ru_course->meta_keywords = $request->input('meta_keywords_ru');
            $ru_course->text_1 = $request->input('text_1_ru');
            $ru_course->link_2 = $request->input('link_2_ru');
            $ru_course->anchor_2 = $request->input('anchor_2_ru');
            $ru_course->text_2 = $request->input('text_2_ru');

            $ru_course->save();

            $uk_course = new CoursesUk();

            $uk_course->title = $request->input('title_uk');
            $uk_course->short_text_1 = $request->input('short_text_1_uk');
            $uk_course->link_1 = $request->input('link_1_uk');
            $uk_course->short_text_2 = $request->input('short_text_2_uk');
            $uk_course->meta_title = $request->input('meta_title_uk');
            $uk_course->meta_desctiption = $request->input('meta_description_uk');
            $uk_course->meta_keywords = $request->input('meta_keywords_uk');
            $uk_course->text_1 = $request->input('text_1_uk');
            $uk_course->link_2 = $request->input('link_2_uk');
            $uk_course->anchor_2 = $request->input('anchor_2_uk');
            $uk_course->text_2 = $request->input('text_2_uk');

            $uk_course->save();

            $language = session('language');
            if ($language == 'ru') {
                $courses = CoursesRu::all();
            } else {
                $courses = CoursesUk::all();
            }
            return redirect()->route('courses', ['courses' => $courses, 'language' => $language]);
        } else {
            $language = session('language');
            return redirect()->route('contacts', ['language' => $language]);
        }

    }

    public function edit($id, $language)
    {
        echo $id;
        session()->put('id', $id);
        App::setLocale($language);
        session()->put('language', $language);
        $ru_course = CoursesRu::where('id', '=', $id)->first();
        $uk_course = CoursesUk::where('id', '=', $id)->first();
        return view('/admin.edit_course', ['ru_course' => $ru_course, 'uk_course' => $uk_course, 'language' => $language]);
    }

    public function edit_save(Request $request)
    {
        if ($request->method() == 'POST') {
            $id = session('id');
            $ru_course = CoursesRu::where('id', '=', $id)->first();
            $ru_course->meta_title = $request->input('meta_title_ru');
            $ru_course->meta_desctiption = $request->input('meta_description_ru');
            $ru_course->meta_keywords = $request->input('meta_keywords_ru');
            $ru_course->title = $request->input('title_ru');
            $ru_course->short_text_1 = $request->input('short_text_1_ru');
            $ru_course->text_1 = $request->input('text_1_ru');
            $ru_course->link_2 = $request->input('link_2_ru');
            $ru_course->anchor_2 = $request->input('anchor_2_ru');
            $ru_course->text_2 = $request->input('text_2_ru');
            $ru_course->save();

            $uk_course = CoursesUk::where('id', '=', $id)->first();
            $uk_course->meta_title = $request->input('meta_title_uk');
            $uk_course->meta_desctiption = $request->input('meta_description_uk');
            $uk_course->meta_keywords = $request->input('meta_keywords_uk');
            $uk_course->title = $request->input('title_uk');
            $uk_course->short_text_1 = $request->input('short_text_1_uk');
            $uk_course->text_1 = $request->input('text_1_uk');
            $uk_course->link_2 = $request->input('link_2_uk');
            $uk_course->anchor_2 = $request->input('anchor_2_uk');
            $uk_course->text_2 = $request->input('text_2_uk');
            $uk_course->save();

            $language = session('language');
            if ($language == 'ru') {
                $courses = CoursesRu::all();
            } else {
                $courses = CoursesUk::all();
            }
            return \redirect()->route('courses', ['courses' => $courses, 'language' => $language]);
        } else {
            $language = session('language');
            return \redirect()->route('contacts', ['language' => $language]);
        }

    }

}
