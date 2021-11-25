@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <div class="bg-white py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-black">{{__('menu.admin')}}</h1>
                <div class="m-3">
                    <a class="btn btn-outline-dark btn-lg px-4"
                       href="{{route('edit-main-get', ['language' => session('language')])}}">{{__('menu.admin_index')}}</a>
                </div>
                <div class="m-3">
                    <a class="btn btn-outline-dark btn-lg px-4"
                       href="{{route('admin-courses-get', ['language' => session('language')])}}">{{__('menu.admin_courses')}}</a>
                </div>


            </div>
        </div>

    </div>
@endsection
