@extends('layout')

@if(session('language') == 'ru')
    @section('title', 'Курсы польского языка | Эффективное изучение с Alicja')
@section('description', 'Изучение польского языка на курсах специализированной школы "Alicja" поможет быстро достичь желаемого уровня. 14 различных курсов, 9 лет опыта в обучении польскому языку и сотни довольных учеников. Звоните! +380982214122')
@section('keywords', 'курсы польского языка, изучение польского языка, обучение польскому языку, изучить польский язык')
@else
    @section('title', 'Курси польської мови | Ефективне вивчення з Alicja')
@section('description', 'Вивчення польської мови на курсах спеціалізованої школи "Alicja" допоможе швидко досягти бажаного рівня. 14 різних курсів, 9 років досвіду в навчанні польської мови і сотні задоволених учнів. Телефонуйте! +380982214122')
@section('keywords', 'курси польської мови, вивчення польської мови, навчання польської мови, вивчити польську мову')

@endif
@section('content')
    <h1 class="text-center m-4">{{__('menu.courses')}}</h1>

    <section class="py-5 bg-white">
        <div class="container px-5">
            <div class="row flex gx-5">
                <div class="col-xl-8">
                    <!-- News item-->
                    <div class="mb-4">
                        @foreach($courses as $course)
                            <a class="link-dark" href="{{route('course', ['id' => $course->id, 'language' => session('language')])}}"><h3>{{$course->title}}</h3></a>
                            <pre>{!! $course->short_text_1 !!} <a href="{{route('course', ['id' => $course->id, 'language' => session('language')])}}"
                                                                  class="text-decoration-none">{{__('menu.more')}}</a></pre>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
