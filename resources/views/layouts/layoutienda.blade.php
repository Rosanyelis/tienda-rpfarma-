<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Tienda RpFarma</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('dist/vendor/bootstrap-4.2.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('dist/vendor/fontawesome-5.6.1/css/all.min.css') }}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{ asset('dist/fonts/stroyka/stroyka.css') }}">
    <style>
        .window-notice {
            background: rgba(33, 41, 52, .85);
            left: 0;
            bottom: 0;
            right: 0;
            top: 0;
            display: flex;
            position: fixed;
            z-index: 999;
        }
        .window-notice .content {
            background: #fff;
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(33, 41, 52, .75);
            box-sizing: content-box;
            display: flex;
            flex-direction: column;
            margin: auto;
            max-width: 600px;
            min-width: 320px !important;
            overflow: hidden;
            position: relative;
            width: 100%;
            padding: 2rem;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <div class="window-notice" id="window-notice">
        <div class="content text-center">
            <h4>Sitio Web en Desarrollo</h4>
            <img src="{{ asset('images/mantenimiento.png') }}" alt="">
            <div class="content-buttons">
                <a href="#" class="btn btn-primary" id="close-button">Aceptar</a>
            </div>
        </div>
    </div>
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{ asset('dist/images/sprite.svg#cross-20')}}"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse
                    data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ url('/')}}" class="mobile-links__item-link">Inicio</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site">

        @include('layouts.tienda.headermobile')

        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo-RpFARMA.png') }}"  width="196px"  alt="Logo RPFarma">
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search">
                            <form class="search__form" method="GET" action="{{ url('/productos') }}">
                                @csrf
                                <input class="search__input" name="name" placeholder="Buscar productos" aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="{{ asset('dist/images/sprite.svg#search-20')}}"></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title"></div>
                        <div class="site-header__phone-number"></div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <div class="nav-panel">
                        <div class="nav-panel__container container">
                            @include('layouts.tienda.navigationtienda')
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="site__body">

            @yield ('content')

        </div>

    </div>

    @include('layouts.tienda.footer')
    <!-- js -->
    <script src="{{ asset('dist/vendor/jquery-3.3.1/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/owl-carousel-2.3.4/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/nouislider-12.1.0/nouislider.min.js') }}"></script>
    <script src="{{ asset('dist/js/number.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('dist/vendor/svg4everybody-2.1.9/svg4everybody.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        svg4everybody();
    </script>
    <script>
        (function ($) {
            "use strict";

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            @if (session('success'))
            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            });
            @endif
            @if (session('error'))
            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            });
            @endif

            $('.dropdown-menu').on('click', function (e) {
                e.stopPropagation();
            });
        })(jQuery);
        let close_button = document.getElementById('close-button');
        close_button.addEventListener("click", function(e) {
            e.preventDefault();
            document.getElementById("window-notice").style.display = "none";
        });
    </script>
    @yield('scripts')
</body>
</html>
