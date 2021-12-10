@extends('layout')

@if(session('language') == 'ru')
    @section('title', 'Курсы польского языка | Цена и продолжительность (Калькулятор Alicja)')
@section('description', 'Цена и продолжительность обучения польскому языку должна быть точно рассчитана с самого начала. Воспользуйтесь нашим калкулятором или просто позвоните нам! +380982214122')
@section('keywords', 'курсы польского языка цена, польский цена, польский стоимость обучения')
@else
    @section('title', 'Курси польської мови | Ціна і тривалість (Калькулятор Alicja)')
@section('description', 'Ціна і тривалість навчання польській мові повинна бути точно розрахована від самого початку. Скористайтесь нашим калкулятором або просто зателефонуйте нам! +380982214122')
@section('keywords', 'курси польської мови ціна, польська мова ціна, польська мова вартість навчання')
@endif

@section('content')
    <h1 class="text-center m-4">{{__('menu.calc')}}</h1>

    <section class="py-5 bg-white">
        <div class="container px-5">
            <div class="row flex gx-5">
                <div class="col-xl-8">
                    <!-- News item-->
                    <div class="mb-4">
                        <form action="" method="post"
                              class="form-control py-5 border-bottom row">
                            @csrf
                            <div class="flex-center m-b-50">
                                <div class="col-lg-5 d-inline-block text-center">
                                    <strong>{{__('menu.first_level')}}</strong>
                                    <br>
                                    <br>
                                    <select class="input-group-text d-inline-block m-450-25" name="first_level_txt">
                                        @foreach($levels as $level)
                                            <option>{{$level->first_level_txt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-5 d-inline-block text-center">
                                    <strong>{{__('menu.last_level')}}</strong>
                                    <br>
                                    <br>
                                    <select class="input-group-text d-inline-block " name="first_level_txt">
                                        @foreach($levels as $level)
                                            <option>{{$level->last_level_txt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex-center">
                                <strong>{{__('menu.add_wish')}}</strong>
                            </div>
                            <div class="flex-center m-b-50">
                                <div class="col-lg-5 d-inline-block text-center">
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="intensive" value="">
                                    <label class="form-check-label"
                                           for="flexCheckDefault">{{__('menu.want_intens')}}</label>
                                </div>
                                <div class="col-lg-5 d-inline-block text-center">
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="kp" value="">
                                    <label class="form-check-label"
                                           for="flexCheckDefault">{{__('menu.want_kp')}}</label>
                                </div>
                            </div>
                                <button class="btn btn-outline-dark">{{__('menu.count')}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

