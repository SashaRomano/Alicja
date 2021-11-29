@extends('layout')

@section('title', $course->meta_title)

@section('description', $course->meta_description)

@section('keywords', $course->meta_keywords)


@section('content')
    <h1 class="text-center m-4">{{$course->title}}</h1>

    <section class="py-5 bg-white">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- News item-->
                    <div class="mb-4">

                            <pre>{!! $course->text_1 !!} <a
                                    href="{{$course->link_2}}"
                                    class="text-decoration-none">{{$course->anchor_2}}</a> {!! $course->text_2 !!} <a
                                    href="{{$course->link_3}}"
                                    class="text-decoration-none">{{$course->anchor_3}}</a> {!! $course->text_3 !!}
                                <br>
                                <br>
                                  <a class="btn btn-outline-dark btn-lg px-4"
                                     href="{{route('save-req-get', ['language' => session('language')])}}">{{__('menu.course_free')}}</a>
                           </pre>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
