@extends ('layouts.layoutienda')
@section('content')
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Inicio</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Buscar Medicamentos
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="site-header__search ml-5 mr-5 mb-5">
                <div class="search">
                    <p>Inserte el nombre del medicamento que desea buscar</p>
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
            <div class="block block-products-carousel ml-4 mr-4" data-layout="grid-4">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Cuidado Personal</h3>
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
        </div>
@endsection
