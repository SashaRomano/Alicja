@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <div class="bg-white py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 flex-column">
                <h1>{{__('menu.admin_index')}}</h1>
                <!-- Add if auth check -->
                <form action="edit-main" method="post" enctype="multipart/form-data" class="form-control py-5 border-bottom row">
                    @csrf
                    <div class="col-lg-5 form-check-inline">
                        @foreach($ru_contents as $ru_content)
                            <strong>Meta title:</strong>
                            <input type="text" name="title_ru" value="{{$ru_content->title}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Meta description:</strong>
                            <textarea type="text" name="description_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->description}}</textarea>
                            <hr>
                            <strong>Meta keywords:</strong>
                            <textarea type="text" name="keywords_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->keywords}}</textarea>
                            <hr>
                            <hr>
                            <strong>About us:</strong>
                            <input type="text" name="us_ru" value="{{$ru_content->us}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Attention:</strong>
                            <textarea type="text" name="attention_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->attention}}</textarea>
                            <hr>
                            <strong>Main button:</strong>
                            <input type="text" name="button_main_ru" value="{{$ru_content->button_main}}" class="input-group-text col-lg-12">
                            <hr>
                            <hr>
                            <strong>Icon 1:</strong>
                            <input type="file" name="icon_1_ru" value="{{$ru_content->icon_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 1:</strong>
                            <input type="text" name="subtitle_1_ru" value="{{$ru_content->subtitle_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 1:</strong>
                            <textarea type="text" name="subtext_1_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->subtext_1}}</textarea>
                            <hr>
                            <strong>Button 1:</strong>
                            <input type="text" name="button_1_ru" value="{{$ru_content->button_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Icon 2:</strong>
                            <input type="file" name="icon_2_ru" value="{{$ru_content->icon_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 2:</strong>
                            <input type="text" name="subtitle_2_ru" value="{{$ru_content->subtitle_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 2:</strong>
                            <textarea type="text" name="subtext_2_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->subtext_2}}</textarea>
                            <hr>
                            <strong>Button 2:</strong>
                            <input type="text" name="button_2_ru" value="{{$ru_content->button_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Icon 3:</strong>
                            <input type="file" name="icon_3_ru" value="{{$ru_content->icon_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 3:</strong>
                            <input type="text" name="subtitle_3_ru" value="{{$ru_content->subtitle_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 3:</strong>
                            <textarea type="text" name="subtext_3_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->subtext_3}}</textarea>
                            <hr>
                            <strong>Button 3:</strong>
                            <input type="text" name="button_3_ru" value="{{$ru_content->button_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <hr>
                            <strong>Review title:</strong>
                            <input type="text" name="review_title_ru" value="{{$ru_content->review_title}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 1:</strong>
                            <textarea type="text" name="review_text_1_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->review_text_1}}</textarea>
                            <hr>
                            <strong>Review author 1:</strong>
                            <input type="text" name="review_author_1_ru" value="{{$ru_content->review_author_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 1:</strong>
                            <input type="text" name="review_location_1_ru" value="{{$ru_content->review_location_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 1:</strong>
                            <input type="date" name="review_date_1_ru" value="{{$ru_content->review_date_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 2:</strong>
                            <textarea type="text" name="review_text_2_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->review_text_2}}</textarea>
                            <hr>
                            <strong>Review author 2:</strong>
                            <input type="text" name="review_author_2_ru" value="{{$ru_content->review_author_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 2:</strong>
                            <input type="text" name="review_location_2_ru" value="{{$ru_content->review_location_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 2:</strong>
                            <input type="date" name="review_date_2_ru" value="{{$ru_content->review_date_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 3:</strong>
                            <textarea type="text" name="review_text_3_ru" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$ru_content->review_text_3}}</textarea>
                            <hr>
                            <strong>Review author 3:</strong>
                            <input type="text" name="review_author_3_ru" value="{{$ru_content->review_author_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 3:</strong>
                            <input type="text" name="review_location_3_ru" value="{{$ru_content->review_location_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 3:</strong>
                            <input type="date" name="review_date_3_ru" value="{{$ru_content->review_date_3}}" class="input-group-text col-lg-12">
                            <hr>


                        @endforeach
                    </div>
                    <div class="col-lg-5 form-check-inline">
                        @foreach($uk_contents as $uk_content)
                            <strong>Meta title:</strong>
                            <input type="text" name="title_uk" value="{{$uk_content->title}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Meta description:</strong>
                            <textarea type="text" name="description_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->description}}</textarea>
                            <hr>
                            <strong>Meta keywords:</strong>
                            <textarea type="text" name="keywords_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->keywords}}</textarea>
                            <hr>
                            <hr>
                            <strong>About us:</strong>
                            <input type="text" name="us_uk" value="{{$uk_content->us}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Attention:</strong>
                            <textarea type="text" name="attention_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->attention}}</textarea>
                            <hr>
                            <strong>Main button:</strong>
                            <input type="text" name="button_main_uk" value="{{$uk_content->button_main}}" class="input-group-text col-lg-12">
                            <hr>
                            <hr>
                            <strong>Icon 1:</strong>
                            <input type="file" name="icon_1_uk" value="{{$uk_content->icon_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 1:</strong>
                            <input type="text" name="subtitle_1_uk" value="{{$uk_content->subtitle_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 1:</strong>
                            <textarea type="text" name="subtext_1_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->subtext_1}}</textarea>
                            <hr>
                            <strong>Button 1:</strong>
                            <input type="text" name="button_1_uk" value="{{$uk_content->button_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Icon 2:</strong>
                            <input type="file" name="icon_2_uk" value="{{$uk_content->icon_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 2:</strong>
                            <input type="text" name="subtitle_2_uk" value="{{$uk_content->subtitle_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 2:</strong>
                            <textarea type="text" name="subtext_2_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->subtext_2}}</textarea>
                            <hr>
                            <strong>Button 2:</strong>
                            <input type="text" name="button_2_uk" value="{{$uk_content->button_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Icon 3:</strong>
                            <input type="file" name="icon_3_uk" value="{{$uk_content->icon_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtitle 3:</strong>
                            <input type="text" name="subtitle_3_uk" value="{{$uk_content->subtitle_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Subtext 3:</strong>
                            <textarea type="text" name="subtext_3_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->subtext_3}}</textarea>
                            <hr>
                            <strong>Button 3:</strong>
                            <input type="text" name="button_3_uk" value="{{$uk_content->button_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <hr>
                            <strong>Review title:</strong>
                            <input type="text" name="review_title_uk" value="{{$uk_content->review_title}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 1:</strong>
                            <textarea type="text" name="review_text_1_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->review_text_1}}</textarea>
                            <hr>
                            <strong>Review author 1:</strong>
                            <input type="text" name="review_author_1_uk" value="{{$uk_content->review_author_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 1:</strong>
                            <input type="text" name="review_location_1_uk" value="{{$uk_content->review_location_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 1:</strong>
                            <input type="date" name="review_date_1_uk" value="{{$uk_content->review_date_1}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 2:</strong>
                            <textarea type="text" name="review_text_2_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->review_text_2}}</textarea>
                            <hr>
                            <strong>Review author 2:</strong>
                            <input type="text" name="review_author_2_uk" value="{{$uk_content->review_author_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 2:</strong>
                            <input type="text" name="review_location_2_uk" value="{{$uk_content->review_location_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 2:</strong>
                            <input type="date" name="review_date_2_uk" value="{{$uk_content->review_date_2}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review text 3:</strong>
                            <textarea type="text" name="review_text_3_uk" cols="45" rows="10" wrap="soft" class="input-group-text col-lg-12">{{$uk_content->review_text_3}}</textarea>
                            <hr>
                            <strong>Review author 3:</strong>
                            <input type="text" name="review_author_3_uk" value="{{$uk_content->review_author_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review location 3:</strong>
                            <input type="text" name="review_location_3_uk" value="{{$uk_content->review_location_3}}" class="input-group-text col-lg-12">
                            <hr>
                            <strong>Review date 3:</strong>
                            <input type="date" name="review_date_3_uk" value="{{$uk_content->review_date_3}}" class="input-group-text col-lg-12">
                            <hr>











                        @endforeach
                    </div>

                    <button class="btn btn-outline-dark">{{__('menu.save_changes')}}</button>
                </form>
            </div>
        </div>

    </div>
@endsection

