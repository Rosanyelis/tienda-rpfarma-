<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>E-comerce</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('dist/vendor/bootstrap-4.2.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
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

        <header class="site__header d-lg-none">
            <div class="mobile-header mobile-header--sticky mobile-header--stuck">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.html">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                    <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                                </svg></a>
                            <div class="mobile-header__search">
                                <form class="mobile-header__search-form" action="#"><input
                                        class="mobile-header__search-input" name="search"
                                        placeholder="Search over 10,000 products" aria-label="Site search" type="text"
                                        autocomplete="off"> <button
                                        class="mobile-header__search-button mobile-header__search-button--submit"
                                        type="submit"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg></button> <button
                                        class="mobile-header__search-button mobile-header__search-button--close"
                                        type="button"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg></button>
                                    <div class="mobile-header__search-body"></div>
                                </form>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-sm-none"><button
                                        class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg></span></button></div>
                                <div class="indicator indicator--mobile d-sm-flex d-none"><a href="wishlist.html"
                                        class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg> <span class="indicator__value">0</span></span></a></div>
                                <div class="indicator indicator--mobile"><a href="cart.html"
                                        class="indicator__button"><span class="indicator__area"><svg width="20px"
                                                height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg> <span class="indicator__value">3</span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="about-us.html">Acerca de nosotros</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="contact-us.html">Contactanos</a>
                            </div>
                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">Mi Cuenta
                                        <svg width="7px" height="5px">
                                            <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-down-7x5')}}"></use>
                                        </svg>
                                    </button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <ul class="menu menu--layout--topbar">
                                            <li><a href="account.html">Acceder</a></li>
                                            <li><a href="account.html">Registrar</a></li>
                                        </ul>
                                        <!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">

                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="index.html">
                            <img src="{{ asset('images/logo-RpFARMA.png') }}"  width="196px"  alt="Logo RPFarma">
                            {{-- <svg xmlns="" width="196px" height="26px"></svg> --}}
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
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments" data-departments-fixed-by="">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <ul class="departments__links">
                                                    <li class="departments__item">
                                                        <a href="#">Power Tools
                                                            <svg class="departments__link-arrow" width="6px" height="9px">
                                                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('{{asset('dist/images/megamenu/megamenu-1.jpg')}}');">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Power Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Engravers</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Drills</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Wrenches</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Plumbing</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Wall Chaser</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Pneumatic Tools</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Milling Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="#">Workbenches</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="#">Presses</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="#">Spray Guns</a></li>
                                                                            <li class="megamenu__item"><a
                                                                                    href="#">Riveters</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Hand Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Screwdrivers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Handsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Knives</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Axes</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Multitools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Paint Tools</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Garden Equipment</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Motor Pumps</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chainsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Electric Saws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Brush Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Machine Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Thread Cutting</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chip Blowers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Sharpening
                                                                                            Machines</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Pipe Cutters</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Slotting
                                                                                            machines</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Lathes</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Instruments</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Welding
                                                                                            Equipment</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Power Tools</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Hand Tools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Measuring Tool</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item">
                                                        <a href="#">Hand Tools <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--lg">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('{{asset('dist/images/megamenu/megamenu-2.jpg')}}');">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Hand Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Screwdrivers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Handsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Knives</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Axes</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Multitools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Paint Tools</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Garden Equipment</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Motor Pumps</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chainsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Electric Saws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Brush Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Machine Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Thread Cutting</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chip Blowers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Sharpening
                                                                                            Machines</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Pipe Cutters</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Slotting
                                                                                            machines</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Lathes</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Instruments</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Welding
                                                                                            Equipment</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Power Tools</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Hand Tools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Measuring Tool</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="#">Machine Tools <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--nl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('{{asset('dist/images/megamenu/megamenu-3.jpg')}}');">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Hand Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Screwdrivers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Handsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Knives</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Axes</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Multitools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Paint Tools</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Garden Equipment</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Motor Pumps</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chainsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Electric Saws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Brush Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Instruments</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Welding
                                                                                            Equipment</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Power Tools</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Hand Tools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Measuring Tool</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="#">Building Supplies <svg
                                                                class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__megamenu departments__megamenu--sm">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <ul
                                                                            class="megamenu__links megamenu__links--level--0">
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Hand Tools</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Screwdrivers</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Handsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Knives</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Axes</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Multitools</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Paint Tools</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="megamenu__item megamenu__item--with-submenu">
                                                                                <a href="#">Garden Equipment</a>
                                                                                <ul
                                                                                    class="megamenu__links megamenu__links--level--1">
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Motor Pumps</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Chainsaws</a></li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Electric Saws</a>
                                                                                    </li>
                                                                                    <li class="megamenu__item"><a
                                                                                            href="#">Brush Cutters</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item departments__item--menu"><a
                                                            href="#">Electrical <svg class="departments__link-arrow"
                                                                width="6px" height="9px">
                                                                <use
                                                                    xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}">
                                                                </use>
                                                            </svg></a>
                                                        <div class="departments__menu">
                                                            <!-- .menu -->
                                                            <ul class="menu menu--layout--classic">
                                                                <li><a href="#">Soldering Equipment <svg
                                                                            class="menu__arrow" width="6px"
                                                                            height="9px">
                                                                            <use
                                                                                xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}">
                                                                            </use>
                                                                        </svg></a>
                                                                    <div class="menu__submenu">
                                                                        <!-- .menu -->
                                                                        <ul class="menu menu--layout--classic">
                                                                            <li><a href="#">Soldering Station</a></li>
                                                                            <li><a href="#">Soldering Dryers</a></li>
                                                                            <li><a href="#">Gas Soldering Iron</a></li>
                                                                            <li><a href="#">Electric Soldering Iron</a>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- .menu / end -->
                                                                    </div>
                                                                </li>
                                                                <li><a href="#">Light Bulbs</a></li>
                                                                <li><a href="#">Batteries</a></li>
                                                                <li><a href="#">Light Fixtures</a></li>
                                                                <li><a href="#">Warm Floor</a></li>
                                                                <li><a href="#">Generators</a></li>
                                                                <li><a href="#">UPS</a></li>
                                                            </ul>
                                                            <!-- .menu / end -->
                                                        </div>
                                                    </li>
                                                    <li class="departments__item"><a href="#">Power Machinery</a></li>
                                                    <li class="departments__item"><a href="#">Measurement</a></li>
                                                    <li class="departments__item"><a href="#">Clothes & PPE</a></li>
                                                    <li class="departments__item"><a href="#">Plumbing</a></li>
                                                    <li class="departments__item"><a href="#">Storage &
                                                            Organization</a></li>
                                                    <li class="departments__item"><a href="#">Welding & Soldering</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="{{asset('dist/images/sprite.svg#menu-18x14')}}"></use>
                                            </svg> Categorias
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-down-9x6')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item">
                                            <a href="{{ url('/') }}"><span>Home</span></a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--with-submenu"><a
                                                href="#"><span>Megamenu <svg class="nav-links__arrow" width="9px"
                                                        height="6px">
                                                        <use xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-down-9x6')}}">
                                                        </use>
                                                    </svg></span></a>
                                            <div class="nav-links__megamenu nav-links__megamenu--size--nl">
                                                <!-- .megamenu -->
                                                <div class="megamenu">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="#">Power Tools</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Engravers</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Wrenches</a></li>
                                                                        <li class="megamenu__item"><a href="#">Wall
                                                                                Chaser</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Pneumatic Tools</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="#">Machine Tools</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a href="#">Thread
                                                                                Cutting</a></li>
                                                                        <li class="megamenu__item"><a href="#">Chip
                                                                                Blowers</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Sharpening Machines</a></li>
                                                                        <li class="megamenu__item"><a href="#">Pipe
                                                                                Cutters</a></li>
                                                                        <li class="megamenu__item"><a href="#">Slotting
                                                                                machines</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Lathes</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="#">Hand Tools</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Screwdrivers</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Handsaws</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Knives</a></li>
                                                                        <li class="megamenu__item"><a href="#">Axes</a>
                                                                        </li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Multitools</a></li>
                                                                        <li class="megamenu__item"><a href="#">Paint
                                                                                Tools</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li
                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                    <a href="#">Garden Equipment</a>
                                                                    <ul
                                                                        class="megamenu__links megamenu__links--level--1">
                                                                        <li class="megamenu__item"><a href="#">Motor
                                                                                Pumps</a></li>
                                                                        <li class="megamenu__item"><a
                                                                                href="#">Chainsaws</a></li>
                                                                        <li class="megamenu__item"><a href="#">Electric
                                                                                Saws</a></li>
                                                                        <li class="megamenu__item"><a href="#">Brush
                                                                                Cutters</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .megamenu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item">
                                            <a href="contact-us.html">
                                                <span>Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <div class="indicator">
                                        <a href="wishlist.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#heart-20')}}"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="cart.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#cart-20')}}"></use>
                                                </svg>
                                                <span class="indicator__value">3</span>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart">
                                                <div class="dropcart__products-list">
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image">
                                                            <a href="product.html">
                                                                <img src="{{ asset('dist/images/products/product-1.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name">
                                                                <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                                                            </div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: Yellow</li>
                                                                <li>Material: Aluminium</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta">
                                                                <span class="dropcart__product-quantity">2</span> x
                                                                <span class="dropcart__product-price">$699.00</span>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                            <svg width="10px" height="10px">
                                                                <use xlink:href="{{ asset('dist/images/sprite.svg#cross-10')}}"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="dropcart__totals">
                                                    <table>
                                                        <tr>
                                                            <th>Subtotal</th>
                                                            <td>$5,877.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping</th>
                                                            <td>$25.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tax</th>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total</th>
                                                            <td>$5,902.00</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="dropcart__buttons">
                                                    <a class="btn btn-secondary" href="cart.html">View Cart</a>
                                                    <a class="btn btn-primary" href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="site__body">

            @yield ('content')

        </div>

    </div>

    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contactanos</h5>
                                <div class="footer-contacts__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer in feugiat lorem. Pellentque ac placerat tellus.</div>
                                <ul class="footer-contacts__contacts">
                                    <li>
                                        <i class="footer-contacts__icon fas fa-globe-americas"></i>
                                        715 Fake Street, New York 10021 USA
                                    </li>
                                    <li>
                                        <i class="footer-contacts__icon far fa-envelope"></i>
                                        stroyka@example.com
                                    </li>
                                    <li>
                                        <i class="footer-contacts__icon fas fa-mobile-alt"></i>
                                        (800) 060-0730, (800) 060-0730
                                    </li>
                                    <li>
                                        <i class="footer-contacts__icon far fa-clock"></i>
                                        Mon-Sat 10:00pm - 7:00pm
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Informacion</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Acerca de nosotros</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Delivery Information</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Politicas de seguridad</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Contactanos</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Ubicacion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">My Account</h5>
                                <ul class="footer-links__list">

                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Historial de Ordenes</a></li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Correo</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Comentarios</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Ofertas especiales</a>
                                    </li>
                                    <li class="footer-links__item">
                                        <a href="#" class="footer-links__link">Certificados</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Correo</h5>
                                <div class="footer-newsletter__text">Praesent pellentesque volutpat ex, vitae auctor
                                    lorem pulvinar mollis felis at lacinia.</div>
                                <form action="#" class="footer-newsletter__form"><label class="sr-only"
                                        for="footer-newsletter-address">Direccion de correo</label> <input type="text"
                                        class="footer-newsletter__form-input form-control"
                                        id="footer-newsletter-address" placeholder="Email Address..."> <button
                                        class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">Nuestras Redes
                                    Sociales</div>
                                <ul class="footer-newsletter__social-links">
                                    <li
                                        class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                        <a href="#" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                        <a href="#" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                        <a href="#" target="_blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li
                                        class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                        <a href="#" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--rss"><a
                                            href="#" target="_blank"><i
                                                class="fas fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">

                    <div class="site-footer__payments"><img src="{{asset('dist/images/payments.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </footer>
</body>





</html>
