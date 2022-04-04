@extends ('layouts.layoutienda')
@section('content')
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Inicio</a>
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
                {{-- <div class="page-header__title">
                    <h1>Productos</h1>
                </div> --}}
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
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-left-6x9')}}"></use>
                                                                </svg>
                                                                <a href="#">Construction & Repair</a>
                                                                <div class="filter-categories__counter"> 254 </div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-left-6x9')}}"></use>
                                                                </svg>
                                                                <a href="#">Instruments</a>
                                                                <div class="filter-categories__counter"> 75 </div>
                                                            </li>
                                                            <li
                                                                class="filter-categories__item filter-categories__item--current">
                                                                <a href="#">Power Tools</a>
                                                                <div class="filter-categories__counter"> 21 </div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Drills & Mixers</a>
                                                                <div class="filter-categories__counter"> 15 </div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Cordless Screwdrivers</a>
                                                                <div class="filter-categories__counter"> 2 </div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="#">Screwdrivers</a>
                                                                <div class="filter-categories__counter"> 30</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Price
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="{{('dist/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1130">
                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title">
                                                            Price: $<span class="filter-price__min-value"></span>
                                                            – $<span class="filter-price__max-value"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <button class="btn btn-primary btn-sm">Filtrar</button>
                                    <button class="btn btn-secondary btn-sm ml-2">
                                        Reset
                                    </button>
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
                                    <div class="view-options__legend">
                                        Mostrando 6 de 98 productos
                                    </div>
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__control">
                                        <label for="">Ordenar por</label>
                                        <div>
                                            <select class="form-control form-control-sm" name="" id="">
                                                <option value="">Default</option>
                                                <option value="">Nombre (A-Z)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="view-options__control">
                                        <label for="">Mostrar</label>
                                        <div>
                                            <select class="form-control form-control-sm" name="" id="">
                                                <option value="">12</option>
                                                <option value="">24</option>
                                            </select>
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
                                                @if ($item->ficha->condicion_venta == 'Requiere Receta' )
                                                <div class="product-card__badge product-card__badge--sale">{{ $item->ficha->condicion_venta }}</div>
                                                @else
                                                <div class="product-card__badge product-card__badge--new">{{ $item->ficha->condicion_venta }}</div>
                                                @endif
                                            </div>
                                            <div class="product-card__image">
                                                <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">
                                                    <img src="{{ $item->foto }}" alt="{{ $item->name }}" />
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">{{ $item->name }}</a>
                                                </div>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__prices">$ {{ $item->precio_venta }}</div>
                                                <div class="product-card__buttons">
                                                    <button class="btn btn-primary product-card__addtocart" type="button">
                                                        Añadir al Carrito
                                                    </button>
                                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">
                                                        Añadir al Carrito
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="products-view__pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link--with-arrow" href="#" aria-label="Previous"><svg
                                                class="page-link__arrow page-link__arrow--left" aria-hidden="true"
                                                width="8px" height="13px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-left-8x13')}}"></use>
                                            </svg></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link page-link--with-arrow" href="#" aria-label="Next">
                                            <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-8x13')}}"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
