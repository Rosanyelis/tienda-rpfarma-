<header class="site__header d-lg-none">
    <div class="mobile-header mobile-header--sticky mobile-header--stuck">
        <div class="mobile-header__panel">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button">
                        <svg width="18px" height="14px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#menu-18x14')}}"></use>
                        </svg>
                    </button>
                    <a class="mobile-header__logo" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-RpFARMA.png') }}"  width="196px"  alt="Logo RPFarma">
                    </a>
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
                    {{-- <div class="mobile-header__indicators">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
