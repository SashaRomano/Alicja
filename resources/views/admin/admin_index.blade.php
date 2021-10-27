@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <div class="bg-light py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                <h1>{{__('menu.admin_index')}}</h1>
                <!-- Add if auth check -->
                <form action="edit-main" method="post" enctype="multipart/form-data" class="form-control">
                    @csrf
                    @foreach($ru_contents as $ru_content)
                    ru: <input type="text" name="us_ru" value="{{$ru_content->us}}" class="input-group-text"><br>
                    @endforeach
                    @foreach($uk_contents as $uk_content)
                    uk: <input type="text" name="us_uk" value="{{$uk_content->us}}"class="input-group-text"><br>
                    @endforeach
                    <button class="btn btn-outline-dark">{{__('menu.save_changes')}}</button>
                </form>
            </div>
        </div>

    </div>
@endsection
