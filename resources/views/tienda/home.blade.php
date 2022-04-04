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
                        <div class="block-features__subtitle">Llamanos en todo momento</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{asset('dist/images/sprite.svg#fi-24-hours-48')}}"></use>
                        </svg>
                    </div>
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
                    @foreach ($productos as $item)
                    <div class="block-products-carousel__column">
                        <div class="block-products-carousel__cell">
                            <div class="product-card">
                                <div class="product-card__badges-list">
                                    @if ($item->ficha->condicion_venta == 'Requiere Receta' )
                                    <div class="product-card__badge product-card__badge--sale">{{ $item->ficha->condicion_venta }}</div>
                                    @else
                                    <div class="product-card__badge product-card__badge--new">{{ $item->ficha->condicion_venta }}</div>
                                    @endif
                                </div>
                                <div class="product-card__image">
                                    <a href="product.html">
                                        <img src="{{ $item->foto }}" alt="{{ $item->name }}">
                                        </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">{{ $item->name }}</a>
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability:
                                        <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">$ {{ $item->precio_venta }}</div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button">Añadir al Carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
