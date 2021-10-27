@extends('layout')

@section('title', 'Польский язык для начинающих | Изучаем разговорные основы с Alicja')

@section('description', 'При изучении польского языка начинающим очень важно правильно усвоить азы, основы, "поставить" разговорную речь. Alicja приглашает на интереснейшие уроки! +380982214122')

@section('keywords', 'польский язык для начинающих, изучение польского языка, уроки польского языка, разговорные азы и основы польского языка')

@section('content')
    @foreach($contents as $content)
    <!-- Header-->
    <header class="bg-black py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">{{$content->us}}</h1>
                        <p class="lead text-white-50 mb-4">{{$content->attention}}</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">{{$content->button_main}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">{{$content->subtitle_1}}</h2>
                    <p>{{$content->subtext_1}}</p>
                    <a class="text-decoration-none" href="#!">
                        {{$content->button_1}}
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder">{{$content->subtitle_2}}</h2>
                    <p>{{$content->subtext_2}}</p>
                    <a class="text-decoration-none" href="#!">
                        {{$content->button_2}}
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
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
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">{{$content->review_title}}</h2>
                <p class="lead mb-0">{{$content->review_title}}</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">{{$content->review_text_1}}</p>
                                    <div class="small text-muted">- {{$content->review_author_1}}, {{$content->review_location_1}}, {{$content->review_date_1}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">{{$content->review_text_2}}</p>
                                    <div class="small text-muted">- {{$content->review_author_2}}, {{$content->review_location_2}}, {{$content->review_date_2}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">{{$content->review_text_3}}</p>
                                    <div class="small text-muted">- {{$content->review_author_3}}, {{$content->review_location_3}}, {{$content->review_date_3}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <!--<section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h2 class="fw-bolder">Get in touch</h2>
                <p class="lead mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

    <!--<form id="contactForm" data-sb-form-api-token="API_TOKEN">-->
        <!-- Name input-->
    <!--<div class="form-floating mb-3">
        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
        <label for="name">Full name</label>
        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
    </div>-->
    <!-- Email address input-->
    <!--                     <div class="form-floating mb-3">
                             <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                             <label for="email">Email address</label>
                             <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                             <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                         </div>-->
                         <!-- Phone number input-->
    <!--<div class="form-floating mb-3">
        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
        <label for="phone">Phone number</label>
        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
    </div>-->
    <!-- Message input-->
    <!--           <div class="form-floating mb-3">
                   <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                   <label for="message">Message</label>
                   <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
               </div>-->
               <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
    <!--<div class="d-none" id="submitSuccessMessage">
        <div class="text-center mb-3">
            <div class="fw-bolder">Form submission successful!</div>
            To activate this form, sign up at
            <br />
            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
        </div>
    </div>-->
    <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
    <!--<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>-->
    <!-- Submit Button-->
    <!-- <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
 </form>
</div>
</div>
</div>-->
</section>
@endforeach
@endsection
