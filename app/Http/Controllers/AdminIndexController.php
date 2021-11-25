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

    public function edit_save(Request $request)
    {
        if ($request->method() == 'POST') {

            $ru_contents = IndexRuContent::where('id', '=', 2)->first();
            $ru_contents->title = $request->input('title_ru');
            $ru_contents->description = $request->input('description_ru');
            $ru_contents->keywords = $request->input('keywords_ru');
            $ru_contents->us = $request->input('us_ru');
            $ru_contents->attention = $request->input('attention_ru');
            $ru_contents->button_main = $request->input('button_main_ru');
            $ru_contents->subtitle_1 = $request->input('subtitle_1_ru');
            $ru_contents->subtitle_2 = $request->input('subtitle_2_ru');
            $ru_contents->subtitle_3 = $request->input('subtitle_3_ru');
            $ru_contents->subtext_1 = $request->input('subtext_1_ru');
            $ru_contents->subtext_2 = $request->input('subtext_2_ru');
            $ru_contents->subtext_3 = $request->input('subtext_3_ru');
            $ru_contents->button_1 = $request->input('button_1_ru');
            $ru_contents->button_2 = $request->input('button_2_ru');
            $ru_contents->button_3 = $request->input('button_3_ru');
            $ru_contents->review_title = $request->input('review_title_ru');
            $ru_contents->review_text_1 = $request->input('review_text_1_ru');
            $ru_contents->review_text_2 = $request->input('review_text_2_ru');
            $ru_contents->review_text_3 = $request->input('review_text_3_ru');
            $ru_contents->review_author_1 = $request->input('review_author_1_ru');
            $ru_contents->review_author_2 = $request->input('review_author_2_ru');
            $ru_contents->review_author_3 = $request->input('review_author_3_ru');
            $ru_contents->review_location_1 = $request->input('review_location_1_ru');
            $ru_contents->review_location_2 = $request->input('review_location_2_ru');
            $ru_contents->review_location_3 = $request->input('review_location_3_ru');
            $ru_contents->review_date_1 = $request->input('review_date_1_ru');
            $ru_contents->review_date_2 = $request->input('review_date_2_ru');
            $ru_contents->review_date_3 = $request->input('review_date_3_ru');

            $image_1 = $request->icon_1_ru;
            if ($image_1) {
                $imageName = $image_1->getClientOriginalName();
                $image_1->move('Images', $imageName);
                $ru_contents->icon_1 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $ru_contents->icon_1 = 'http://alicja-new/Images/Icon_100.png';
            }
            $image_2 = $request->icon_2_ru;
            if ($image_2) {
                $imageName = $image_2->getClientOriginalName();
                $image_2->move('Images', $imageName);
                $ru_contents->icon_2 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $ru_contents->icon_2 = 'http://alicja-new/Images/Icon_100.png';
            }
            $image_3 = $request->icon_3_ru;
            if ($image_3) {
                $imageName = $image_3->getClientOriginalName();
                $image_3->move('Images', $imageName);
                $ru_contents->icon_3 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $ru_contents->icon_3 = 'http://alicja-new/Images/Icon_100.png';
            }
            $ru_contents->save();

            $uk_contents = IndexUkContent::where('id', '=', 2)->first();
            $uk_contents->title = $request->input('title_uk');
            $uk_contents->description = $request->input('description_uk');
            $uk_contents->keywords = $request->input('keywords_uk');
            $uk_contents->us = $request->input('us_uk');
            $uk_contents->attention = $request->input('attention_uk');
            $uk_contents->button_main = $request->input('button_main_uk');
            $uk_contents->subtitle_1 = $request->input('subtitle_1_uk');
            $uk_contents->subtitle_2 = $request->input('subtitle_2_uk');
            $uk_contents->subtitle_3 = $request->input('subtitle_3_uk');
            $uk_contents->subtext_1 = $request->input('subtext_1_uk');
            $uk_contents->subtext_2 = $request->input('subtext_2_uk');
            $uk_contents->subtext_3 = $request->input('subtext_3_uk');
            $uk_contents->button_1 = $request->input('button_1_uk');
            $uk_contents->button_2 = $request->input('button_2_uk');
            $uk_contents->button_3 = $request->input('button_3_uk');
            $uk_contents->review_title = $request->input('review_title_uk');
            $uk_contents->review_text_1 = $request->input('review_text_1_uk');
            $uk_contents->review_text_2 = $request->input('review_text_2_uk');
            $uk_contents->review_text_3 = $request->input('review_text_3_uk');
            $uk_contents->review_author_1 = $request->input('review_author_1_uk');
            $uk_contents->review_author_2 = $request->input('review_author_2_uk');
            $uk_contents->review_author_3 = $request->input('review_author_3_uk');
            $uk_contents->review_location_1 = $request->input('review_location_1_uk');
            $uk_contents->review_location_2 = $request->input('review_location_2_uk');
            $uk_contents->review_location_3 = $request->input('review_location_3_uk');
            $uk_contents->review_date_1 = $request->input('review_date_1_uk');
            $uk_contents->review_date_2 = $request->input('review_date_2_uk');
            $uk_contents->review_date_3 = $request->input('review_date_3_uk');

            $image_1 = $request->icon_1_uk;
            if ($image_1) {
                $imageName = $image_1->getClientOriginalName();
                $image_1->move('Images', $imageName);
                $uk_contents->icon_1 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $uk_contents->icon_1 = 'http://alicja-new/Images/Icon_100.png';
            }
            $image_2 = $request->icon_2_uk;
            if ($image_2) {
                $imageName = $image_2->getClientOriginalName();
                $image_2->move('Images', $imageName);
                $uk_contents->icon_2 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $uk_contents->icon_2 = 'http://alicja-new/Images/Icon_100.png';
            }
            $image_3 = $request->icon_3_uk;
            if ($image_3) {
                $imageName = $image_3->getClientOriginalName();
                $image_3->move('Images', $imageName);
                $uk_contents->icon_3 = 'http://alicja-new/Images/' . $imageName;
            } else {
                $uk_contents->icon_3 = 'http://alicja-new/Images/Icon_100.png';
            }

            $uk_contents->save();

            $language = session('language');
            if ($language == 'ru'){
                $contents = IndexRuContent::all();
            }else{
                $contents = IndexUkContent::all();
            }
            return \redirect()->route('index', ['contents' => $contents, 'language' => $language]);
        } else {
            $language = session('language');
            return \redirect()->route('contacts', ['language' => $language]);
        }

    }
}
