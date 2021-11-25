@extends('layout')

@section('title', 'Доработать заголовок')

@section('description', 'Доработать описание')

@section('keywords', 'Доработать ключевые слова')

@section('content')
    <div class="bg-white py-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 flex-column">
                <h1>{{__('menu.admin_courses')}}</h1>
                <!-- Add if auth check -->
                <a class="btn btn-outline-dark btn-lg px-4 m-4"
                   href="{{route('add-course-get', ['language' => session('language')])}}">{{__('menu.add_course')}}</a>
                <table class="table table-bordered table-active border-light">
                    <tr>
                        <td>ID</td>
                        <td>{{__('menu.nam')}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->title}}</td>
                            <td>
                                <form action="" method="get">
                                    <input type="hidden" value="{{$course->id}}">
                                    <button type="submit" class="btn btn-outline-success">{{__('menu.edit')}}</button>
                                </form>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection

