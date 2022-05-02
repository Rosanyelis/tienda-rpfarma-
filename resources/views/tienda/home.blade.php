@extends ('layouts.layoutienda')
@section('content')
    <div class="block-slideshow block-slideshow--layout--full block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            <div class="block-slideshow__slide">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-3.jpg')}}'); "></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-3.jpg')}}')"></div>
                            </div>
                            <div class="block-slideshow__slide">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-2.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-2.jpg')}}')"></div>
                            </div>
                            <div class="block-slideshow__slide">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-1.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-1.jpg')}}')"></div>
                            </div>
                            <div class="block-slideshow__slide">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-4.jpg')}}')"></div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{asset('dist/images/slides/Banner-4.jpg')}}')"></div>
                            </div>
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
                        <div class="block-features__title">Envíos a Domicilio</div>
                        <div class="block-features__subtitle">Indique su dirección y estaremos a su orden</div>
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
                        <div class="block-features__title">Soporte</div>
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
                                    @switch($item->ficha->condicionventa->name)
                                        @case($item->ficha->condicionventa->name == 'Receta')
                                        <div class="product-card__badge product-card__badge--sale">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Receta Retenida')
                                        <div class="product-card__badge product-card__badge--sale">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Receta Retenida y Control de Stock')
                                        <div class="product-card__badge product-card__badge--sale">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Receta Cheque')
                                        <div class="product-card__badge product-card__badge--sale">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Venta Libre')
                                        <div class="product-card__badge product-card__badge--new">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Sin Receta')
                                        <div class="product-card__badge product-card__badge--hot">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @case($item->ficha->condicionventa->name == 'Sin Información')
                                        <div class="product-card__badge product-card__badge--hot">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                        @default
                                        @case($item->ficha->condicionventa->name == 'Sin Información')
                                        <div class="product-card__badge product-card__badge--hot">
                                            {{ $item->ficha->condicionventa->name }}
                                        </div>
                                        @break
                                    @endswitch
                                </div>
                                <div class="product-card__image">
                                    <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">
                                        <img src="{{ asset($item->foto) }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a data-name="{{ $item->name }}" href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">{{ $item->name }}</a>
                                    </div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__prices">$ {{ number_format($item->precio_venta, 0, ",", "."); }}</div>
                                    <div class="product-card__buttons">
                                        <form action="{{ url('/productos/anadir-producto-al-carrito') }}" method="POST" >
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <input type="hidden" value="/" name="url">
                                            <button type="submit" class="btn btn-primary product-card__addtocart">Añadir al Carrito</button>
                                        </form>
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
@section('scripts')
<script>
    (function($) {
        "use strict";
        const carousels = $('.owl-carousel');

    })(jQuery);
</script>
@endsection
