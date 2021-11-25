@extends('layout')

@if(session('language') == 'ru')
    @section('title', 'Польский язык для начинающих | Изучаем разговорные основы с Alicja')
@section('description', 'При изучении польского языка начинающим очень важно правильно усвоить азы, основы, "поставить" разговорную речь. Alicja приглашает на интереснейшие уроки! +380982214122')
@section('keywords', 'польский язык для начинающих, изучение польского языка, уроки польского языка, разговорные азы и основы польского языка')
@else
    @section('title', 'Польська мова для початківців | Вивчаємо розмовні основи з Alicja')
@section('description', 'При вивченні польської мови початківцям дуже важливо вірно засвоїти ази, основи, "поставити" вимову. Alicja запрошує на цікаві та ефективні уроки! +380982214122')
@section('keywords', 'польська мова для початківців, вивчення польської мови, уроки польської мови, розмовні ази і основи польської мови')
@endif

@section('content')
    @foreach($contents as $content)
        <!-- Header-->
        <header class="bg-white py-5 border-red">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-3 side side-left">
                        <div class="transparent"></div>
                        <a class="side-a" href="#"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-black mb-2">{{$content->us}}</h1>
                            <p class="lead text-black-50 mb-4">{{$content->attention}}</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-outline-dark btn-lg px-4"
                                   href="{{route('save-req-get', ['language' => session('language')])}}">{{$content->button_main}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 side side-right">
                        <div class="transparent"></div>
                        <a class="side-a" href="#"></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5 bg-white border-red" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 flex mb-5 mb-lg-0">
                        <img class="icon" src="{{$content->icon_1}}">
                        <h2 class="h4 fw-bolder">{{$content->subtitle_1}}</h2>
                        <p><pre>{!! $content->subtext_1 !!}</pre></p>
                        <a class="text-decoration-none" href="#!">
                            {{$content->button_1}}
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 flex mb-5 mb-lg-0">
                        <img class="icon" src="{{$content->icon_2}}">
                        <h2 class="h4 fw-bolder">{{$content->subtitle_2}}</h2>
                        <p><pre>{!! $content->subtext_2 !!}</pre></p>
                        <a class="text-decoration-none" href="#!">
                            {{$content->button_2}}
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 flex mb-5 mb-lg-0">
                        <img class="icon" src="{{$content->icon_3}}">
                        <h2 class="h4 fw-bolder">{{$content->subtitle_3}}</h2>
                        <p>{{$content->subtext_3}}</p>
                        <a class="text-decoration-none" href="#!">
                            {{$content->button_3}}
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials section-->
        <section class="py-5 bg-white border-red">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">{{$content->review_title}}</h2>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Testimonial 1-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i
                                            class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">{!! $content->review_text_1 !!}</p>
                                        <div class="small text-muted">- {{$content->review_author_1}}
                                            , {{$content->review_location_1}}, {{$content->review_date_1}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i
                                            class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">{{$content->review_text_2}}</p>
                                        <div class="small text-muted">- {{$content->review_author_2}}
                                            , {{$content->review_location_2}}, {{$content->review_date_2}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3-->
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i
                                            class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-4">
                                        <p class="mb-1">{{$content->review_text_3}}</p>
                                        <div class="small text-muted">- {{$content->review_author_3}}
                                            , {{$content->review_location_3}}, {{$content->review_date_3}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </section>
    @endforeach
@endsection
