@extends('layout')

@section('title', 'Польский язык для начинающих | Изучаем разговорные основы с Alicja')

@section('description', 'При изучении польского языка начинающим очень важно правильно усвоить азы, основы, "поставить" разговорную речь. Alicja приглашает на интереснейшие уроки! +380982214122')

@section('keywords', 'польский язык для начинающих, изучение польского языка, уроки польского языка, разговорные азы и основы польского языка')

@section('content')

<!-- Contact section-->
<section class="bg-white py-5">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">{{__('menu.choose_course')}}</h2>
            <p class="lead mb-0">{{__('menu.choose_course_0')}}
                <p class="lead mb-0">{{__('menu.choose_course_1')}}</p>
                <p class="lead mb-0">{{__('menu.choose_course_2')}}</p>
                <p class="lead mb-0">{{__('menu.choose_course_3')}}</p>
                <p class="lead mb-0">{{__('menu.choose_course_4')}}</p>

        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
<!-- * * * * * * * * * * * * * * *-->
<!-- * * SB Forms Contact Form * *-->
<!-- * * * * * * * * * * * * * * *-->
<!-- This form is pre-integrated with SB Forms.-->
<!-- To make this form functional, sign up at-->
<!-- https://startbootstrap.com/solution/contact-forms-->
<!-- to get an API token!-->

<form id="contactForm" action="save" method="post">
    @csrf
    <!-- Message input-->
    <div class="form-floating mb-3">
        <textarea class="form-control" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
        <label for="message">{{__('menu.client_message')}}</label>
        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
    </div>
<!-- Name input-->
<div class="form-floating mb-3">
    <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
    <label for="name">{{__('menu.client_name')}}</label>
    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
</div>
    <!-- Phone number input-->
    <div class="form-floating mb-3">
        <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
        <label for="phone">{{__('menu.client_phone')}}</label>
        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
    </div>
<!-- Connect input-->
                     <div class="form-floating mb-3">
                         <select class="form-control" name="connect" data-sb-validations="required,email" >
                             <option>{{__('menu.client_call')}}</option>
                             <option>{{__('menu.client_telegram')}}</option>
                             <option>{{__('menu.client_viber')}}</option>
                             <option>{{__('menu.client_watsapp')}}</option>
                         </select>
                         <label for="email">{{__('menu.client_choose')}}</label>
                     </div>
<!-- Submit success message-->
<!---->
<!-- This is what your users will see when the form-->
<!-- has successfully submitted-->
<div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">
        <div class="fw-bolder">Form submission successful!</div>

    </div>
</div>
<!-- Submit error message-->
<!---->
<!-- This is what your users will see when there is-->
<!-- an error submitting the form-->
<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
<!-- Submit Button-->
 <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">{{__('menu.client_submit')}}</button></div>
</form>
</div>
</div>
</div>

@endsection
