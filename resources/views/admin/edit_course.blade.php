@extends('layout')

@section('title', __('menu.edit_course'))

@section('description', '')

@section('keywords', '')

@section('content')
    <div class="bg-white py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 flex-column">
                @if(session('language') == 'ru')
                    <h1>{{__('menu.edit_course')}} "{{$ru_course->title}}"</h1>
                @else
                    <h1>{{__('menu.edit_course')}} "{{$uk_course->title}}"</h1>
            @endif
            <!-- Add if auth check -->
                <form action="edit-main" method="post" enctype="multipart/form-data"
                      class="form-control py-5 border-bottom row">
                    @csrf
                    <div class="col-lg-5 form-check-inline">
                        <strong>Meta title RU:</strong>
                        <input type="text" name="meta_title_ru" value="{{$ru_course->meta_title}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Meta description RU:</strong>
                        <textarea type="text" name="meta_description_ru" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$ru_course->meta_desctiption}}</textarea>
                        <hr>
                        <strong>Meta keywords RU:</strong>
                        <textarea type="text" name="meta_keywords_ru" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$ru_course->meta_keywords}}</textarea>
                        <hr>
                        <hr>
                        <strong>Title RU:</strong>
                        <input type="text" name="title_ru" value="{{$ru_course->title}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Text preview RU:</strong>
                        <textarea type="text" name="short_text_1_ru" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$ru_course->short_text_1}}</textarea>
                        <hr>
                        <hr>
                        <strong>Long text RU:</strong>
                        <textarea type="text" name="text_1_ru" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$ru_course->text_1}}</textarea>
                        <strong>Link RU:</strong>
                        <input type="text" name="link_2_ru" value="{{$ru_course->link_2}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Anchor RU:</strong>
                        <input type="text" name="anchor_2_ru" value="{{$ru_course->anchor_2}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Long text RU:</strong>
                        <textarea type="text" name="text_2_ru" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$ru_course->text_2}}</textarea>

                    </div>
                    <div class="col-lg-5 form-check-inline">
                        <strong>Meta title UK:</strong>
                        <input type="text" name="meta_title_uk" value="{{$uk_course->meta_title}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Meta description UK:</strong>
                        <textarea type="text" name="meta_description_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$uk_course->meta_desctiption}}</textarea>
                        <hr>
                        <strong>Meta keywords UK:</strong>
                        <textarea type="text" name="meta_keywords_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$uk_course->meta_keywords}}</textarea>
                        <hr>
                        <hr>
                        <strong>Title UK:</strong>
                        <input type="text" name="title_uk" value="{{$uk_course->title}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Text preview UK:</strong>
                        <textarea type="text" name="short_text_1_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$uk_course->short_text_1}}</textarea>
                        <hr>
                        <hr>
                        <strong>Long text UK:</strong>
                        <textarea type="text" name="text_1_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$uk_course->text_1}}</textarea>
                        <strong>Link UK:</strong>
                        <input type="text" name="link_2_uk" value="{{$uk_course->link_2}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Anchor UK:</strong>
                        <input type="text" name="anchor_2_uk" value="{{$uk_course->anchor_2}}"
                               class="input-group-text col-lg-12">
                        <hr>
                        <strong>Long text UK:</strong>
                        <textarea type="text" name="text_2_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12">{{$uk_course->text_2}}</textarea>

                    </div>

                    <button class="btn btn-outline-dark">{{__('menu.save_changes')}}</button>
                </form>
            </div>
        </div>

    </div>
@endsection

