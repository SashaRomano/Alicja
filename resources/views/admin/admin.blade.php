@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <div class="bg-black py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-light">{{__('menu.admin')}}</h1>
                <a class="btn btn-outline-light btn-lg px-4"
                   href="{{route('edit-main-get', ['language' => session('language')])}}">{{__('menu.admin_index')}}</a>
            </div>
        </div>

    </div>
@endsection
