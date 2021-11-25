<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="Oleksandra Romanova" />
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/frontpage/css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-white border-red">
    <div class="container px-5">
        <a class="navbar-brand" href="{{route('index', ['language' => session('language')])}}">
            <!--<img class="logo" src="/frontpage/css/Images/Logo.png" alt="Школа польского языка Alicja">-->
            {{__('menu.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('certificates', ['language' => session('language')])}}">{{__('menu.cert')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('courses', ['language' => session('language')])}}">{{__('menu.courses')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('intensive', ['language' => session('language')])}}">{{__('menu.intens')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('online', ['language' => session('language')])}}">{{__('menu.online')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contacts', ['language' => session('language')])}}">{{__('menu.contacts')}}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownLang" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('menu.lang')}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownLang">
                        <li><a class="dropdown-item" href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['language' => 'uk'])}}">UK</a></li>
                        <li><a class="dropdown-item" href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['language' => 'ru'])}}">RU</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('home', ['language' => session('language')])}}">{{__('menu.enter')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin', ['language' => session('language')])}}">{{__('menu.admin')}}</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
