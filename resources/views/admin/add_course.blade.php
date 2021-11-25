@extends('layout')

@section('title', '')

@section('description', '')

@section('keywords', '')

@section('content')
    <div class="bg-white py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 flex-column">
                <h1>{{__('menu.add_course')}}</h1>
                <!-- Add if auth check -->
                <form action="" method="post" enctype="multipart/form-data" class="form-control py-5 border-bottom row">
                    @csrf
                    <div class="col-lg-5 form-check-inline">
                            <strong>Meta title RU:</strong>
                            <input type="text" name="meta_title_ru" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Meta description RU:</strong>
                            <textarea type="text" name="meta_description_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                            <hr>
                            <strong>Meta keywords RU:</strong>
                            <textarea type="text" name="meta_keywords_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                            <hr>
                            <hr>
                            <strong>Title RU:</strong>
                            <input type="text" name="title_ru" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Preview text RU:</strong>
                            <textarea type="text" name="short_text_1_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                            <hr>
                            <strong>Link RU:</strong>
                            <input type="text" name="link_1_ru" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Preview text RU:</strong>
                            <textarea type="text" name="short_text_2_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                            <hr>
                            <hr>
                            <strong>Text RU:</strong>
                            <textarea type="text" name="text_1_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                            <hr>
                            <strong>Link RU:</strong>
                            <input type="text" name="link_2_ru" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Anchor RU:</strong>
                            <input type="text" name="anchor_2_ru" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Text RU:</strong>
                            <textarea type="text" name="text_2_ru" cols="45" rows="10" wrap="soft"
                                      class="input-group-text col-lg-12"></textarea>
                    </div>
                    <div class="col-lg-5 form-check-inline">
                        <strong>Meta title UK:</strong>
                        <input type="text" name="meta_title_uk" class="input-group-text col-lg-12">
                        <hr>
                        <strong>Meta description UK:</strong>
                        <textarea type="text" name="meta_description_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                        <hr>
                        <strong>Meta keywords UK:</strong>
                        <textarea type="text" name="meta_keywords_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                        <hr>
                        <hr>
                        <strong>Title UK:</strong>
                        <input type="text" name="title_uk" class="input-group-text col-lg-12">
                        <hr>
                        <strong>Preview text UK:</strong>
                        <textarea type="text" name="short_text_1_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                        <hr>
                        <strong>Link UK:</strong>
                        <input type="text" name="link_1_uk" class="input-group-text col-lg-12">
                        <hr>
                        <strong>Preview text UK:</strong>
                        <textarea type="text" name="short_text_2_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                        <hr>
                        <hr>
                        <strong>Text UK:</strong>
                        <textarea type="text" name="text_1_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                        <hr>
                        <strong>Link UK:</strong>
                        <input type="text" name="link_2_uk" class="input-group-text col-lg-12">
                        <hr>
                        <strong>Anchor UK:</strong>
                        <input type="text" name="anchor_2_uk" class="input-group-text col-lg-12">
                        <hr>
                        <strong>Text UK:</strong>
                        <textarea type="text" name="text_2_uk" cols="45" rows="10" wrap="soft"
                                  class="input-group-text col-lg-12"></textarea>
                    </div>

                    <button class="btn btn-outline-dark">{{__('menu.save_changes')}}</button>
                </form>
            </div>
        </div>

    </div>
@endsection
