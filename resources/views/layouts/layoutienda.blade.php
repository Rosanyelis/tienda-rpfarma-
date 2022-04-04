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
</head>

<body>
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
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
                            <a href="index.html" class="mobile-links__item-link">Home</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index.html" class="mobile-links__item-link">Home 1</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link">Categorias</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="#" class="mobile-links__item-link">Power Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="#" class="mobile-links__item-link">Engravers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="#" class="mobile-links__item-link">Wrenches</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="#" class="mobile-links__item-link">Wall Chaser</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="#" class="mobile-links__item-link">Pneumatic Tools</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">Machine Tools</a> <button
                                            class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg
                                                class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg></button></div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Thread Cutting</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Chip Blowers</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Sharpening Machines</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Pipe Cutters</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Slotting machines</a></div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title"><a href="#"
                                                        class="mobile-links__item-link">Lathes</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Comprar</a>
                                <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Comprar</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </li>

                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="cart.html"
                                            class="mobile-links__item-link">Cart</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="checkout.html"
                                            class="mobile-links__item-link">Checkout</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="wishlist.html"
                                            class="mobile-links__item-link">Wishlist</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="compare.html"
                                            class="mobile-links__item-link">Compare</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="account.html"
                                            class="mobile-links__item-link">My Account</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="track-order.html"
                                            class="mobile-links__item-link">Track Order</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a data-collapse-trigger
                                class="mobile-links__item-link">Currency</a> <button class="mobile-links__item-toggle"
                                type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px"
                                    height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg></button></div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">€ Euro</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">£ Pound Sterling</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">$ US Dollar</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">₽ Russian Ruble</a></div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a data-collapse-trigger
                                class="mobile-links__item-link">Language</a> <button class="mobile-links__item-toggle"
                                type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px"
                                    height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg></button></div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">English</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">French</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">German</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">Russian</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="#"
                                            class="mobile-links__item-link">Italian</a></div>
                                </li>
                            </ul>
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
                <!-- .topbar -->
                @include('layouts.tienda.topbar')
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo-RpFARMA.png') }}"  width="196px"  alt="Logo RPFarma">
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search">
                            <form class="search__form" action="#">
                                <input class="search__input" name="search" placeholder="Buscar productos" aria-label="Site search" type="text" autocomplete="off">
                                <button class="search__button" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href=""></use>
                                    </svg>
                                </button>
                                <div class="search__border"></div>
                            </form>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Telefono de Soporte</div>
                        <div class="site-header__phone-number">(800) 060-0730</div>
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
    <script>
        svg4everybody();
    </script>
</body>
</html>
