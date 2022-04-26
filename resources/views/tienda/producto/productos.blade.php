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
                                Productos
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="shop-layout shop-layout--sidebar--start">
                <div class="shop-layout__sidebar">
                    <div class="block block-sidebar">
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget__title">Filtros</h4>
                                <div class="widget-filters__list">
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categorias
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use
                                                        xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-down-12x7') }}">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            @foreach ($categorias as $item)
                                                                <li class="filter-categories__item filter-categories__item--child">
                                                                    <a href="{{ url('/productos/'.$item->id.'/categoria') }}">{{ $item->name }}</a>
                                                                    <div class="filter-categories__counter"> {{ count($item->productos) }} </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <a href="{{ url('/productos') }}" class="btn btn-secondary btn-block">
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-layout__content">
                    <div class="block">
                        <div class="products-view">
                            <div class="products-view__options">
                                <div class="view-options">
                                    <div class="view-options__legend"></div>
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__layout">
                                        <div class="layout-switcher">
                                            <div class="layout-switcher__list">
                                                <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid"
                                                    type="button"
                                                    class="layout-switcher__button layout-switcher__button--active">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#layout-grid-16x16')}}"></use>
                                                    </svg>
                                                </button>
                                                <button data-layout="list" data-with-features="false" title="List"
                                                    type="button" class="layout-switcher__button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#layout-list-16x16')}}"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">
                                    @foreach ($data as $item)
                                    <div class="products-list__item">
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
                                                    <img src="{{ asset($item->foto) }}" alt="{{ $item->name }}" />
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">{{ $item->name }}</a>
                                                </div>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__prices">$ {{ number_format($item->precio_venta, 0, ",", "."); }}</div>
                                                <div class="product-card__buttons">
                                                    <form action="{{ url('/productos/anadir-producto-al-carrito') }}" method="POST" >
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <input type="hidden" value="/productos" name="url">
                                                        <button type="submit" class="btn btn-primary product-card__addtocart">Añadir al Carrito</button>
                                                    </form>
                                                    <form action="{{ url('/productos/anadir-producto-al-carrito') }}" method="POST" >
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <input type="hidden" value="/productos" name="url">
                                                        <button type="submit" class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al Carrito</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
