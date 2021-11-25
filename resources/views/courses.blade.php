@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <h1 class="text-center m-4">{{__('menu.courses')}}</h1>

    <section class="py-5 bg-white">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- News item-->
                    <div class="mb-4">
                        @foreach($courses as $course)
                        <a class="link-dark" href="#!"><h3>{{$course->title}}</h3></a>
                            <pre>{!! $course->short_text_1 !!} <a href="" class="text-decoration-none">{{__('menu.more')}}</a></pre>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
