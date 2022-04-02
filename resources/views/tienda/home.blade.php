@extends ('layouts.layoutienda')
@section('content')
    <div class="block-slideshow block-slideshow--layout--full block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/slide-1-full.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('images/slides/slide-1-mobile.jpg')}}')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg">Comprar Ahora</span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/slide-2-full.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/slide-2-mobile.jpg')}}')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg">Comprar Ahora</span>
                                    </div>
                                </div>
                            </a>
                            <a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/slide-3-full.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/slide-3-mobile.jpg')}}')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg">Compra Ahora</span>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#fi-free-delivery-48')}}"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Envio Gratis</div>
                        <div class="block-features__subtitle"></div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="{{asset('dist/images/sprite.svg#fi-24-hours-48')}}"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Soporte 24/7</div>
                        <div class="block-features__subtitle">Llamanos en todo momento</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#fi-payment-security-48')}}"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% Seguro</div>
                        <div class="block-features__subtitle">Pagos Seguros</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#fi-tag-48')}}"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Ofertas</div>
                        <div class="block-features__subtitle">Descuentos hasta un 90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-products-carousel" data-layout="grid-4">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Lista de productos</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group block-header__group--active">Todos</button></li>
                    {{-- <li><button type="button" class="block-header__group">Power Tools</button></li>
                    <li><button type="button" class="block-header__group">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group">Plumbing</button></li> --}}
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-left-7x11')}}"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-7x11')}}"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('dist/images/sprite.svg#quickview-16')}}"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image">
                                    <a href="product.html">
                                        <img src="{{ asset('dist/images/products/natulac.jpg') }}" alt="">
                                        </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Natulac</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability:
                                        <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$749.00</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card"><button class="product-card__quickview" type="button"><svg
                                        width="16px" height="16px">
                                        <use xlink:href="{{asset('dist/images/sprite.svg#quickview-16')}}"></use>
                                    </svg> <span class="fake-svg-icon"></span></button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--hot">Hot</div>
                                </div>
                                <div class="product-card__image">
                                    <a href="product.html"><img src="{{ asset('dist/images/products/refresco.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="product.html">Refresco Chinotto Sin Calorias
                                            2Lt</a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">11 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In
                                            Stock</span></div>
                                    <div class="product-card__prices">$1,019.00</div>
                                    <div class="product-card__buttons"><button
                                            class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart</button> <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart</button> <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#wishlist-16')}}"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#compare-16')}}"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card"><button class="product-card__quickview" type="button"><svg
                                        width="16px" height="16px">
                                        <use xlink:href="{{ asset('dist/images/sprite.svg#quickview-16')}}"></use>
                                    </svg> <span class="fake-svg-icon"></span></button>
                                <div class="product-card__image">
                                    <a href="{{ url('/detalles-producto') }}"><img
                                            src="{{ asset('dist/images/products/shampoo.jpg') }}" alt=""></a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="{{ url('/detalles-producto') }}">Champu Head &
                                            Shoulders limpieza renov 375ml
                                        </a></div>
                                    <div class="product-card__rating">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal')}}"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke')}}"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In
                                            Stock</span></div>
                                    <div class="product-card__prices">$850.00</div>
                                    <div class="product-card__buttons"><button
                                            class="btn btn-primary product-card__addtocart" type="button">Add To
                                            Cart</button> <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart</button> <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#wishlist-16')}}"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#compare-16')}}"></use>
                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--usar-->
                </div>
            </div>
        </div>
    </div>
@endsection
