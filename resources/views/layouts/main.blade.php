<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link type="image/png" sizes="32x32" rel="icon" href="{{ asset('assets/images/iconsForTitle/icons8-document-color-hand-drawn-32.png') }}">
    <link rel="stylesheet" href=" {{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<header>
    @include('cookieConsent::index')
    <nav class="edica-header navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('main.index') }}">BLOG</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active text-white">
                        <a class="nav-link text-white" href="{{ route('main.index') }}">Главная</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('category.index') }}">Категории</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Контакты</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="№">Предложения</a>
                    </li>


                    @can('view', auth()->user())
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="{{ route('admin.main.index') }}">Админ панель</a>
                        </li>
                    @endcan

                    <li class="nav-item active">

                        @guest()
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Войти</a>
                        @endguest


                        @auth()
                            <a class="nav-link text-white" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                        @endauth

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>


@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner bg-light border" data-aos="fade-up">
            <h1 class="banner-title">Скоро будет доступно мобильное приложение!</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios" class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="{{ asset('assets/images/android@1x.svg') }}" alt="android" class="mr-2">
                    Google Play
                </button>
            </div>
        </div>
    </div>
</section>
<footer class="edica-footer bg-dark" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <p class="contact-details">Blog@gmail.com</p>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">Apple App</a>
                    <a href="#!" class="nav-link">O блоге</a>
                    <a href="#!" class="nav-link">Партнеры</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                </nav>
            </div>

        </div>
        <div class="footer-bottom-content justify-content-center font-weight-bold">
            <p class="mb-0">© Blog. 2022</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
