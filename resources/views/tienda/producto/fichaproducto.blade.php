@extends ('layouts.layoutienda')
@section('content')
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">Inicio</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Productos</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $producto->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="product product--layout--standard" data-layout="standard">
                    <div class="product__content">
                        <!-- .product__gallery -->
                        <div class="product__gallery">
                            <div class="product-gallery">
                                <div class="product-gallery__featured">
                                    <div class="owl-carousel" id="product-image">
                                        <div><img src="{{ asset($producto->foto) }}" alt="{{ $producto->name }}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .product__gallery / end -->
                        <!-- .product__info -->
                        <div class="product__info">
                            <h1 class="product__name">{{ $producto->name }}</h1>
                            <div class="product__rating">
                                <li><strong>{{$producto->ficha->condicionventa->name}}</strong></li>
                            </div>
                            <div class="product__description">{{ $producto->informacion }}</div>
                            <ul class="product__meta">
                                <li class="product__meta-availability">
                                    Stock:
                                    @if ($producto->stock > 0)
                                        <span class="text-success">Disponible</span>
                                    @else
                                        <span class="text-danger">No Disponible</span>
                                    @endif
                                </li>
                                <li>SKU: {{ $producto->sku }}</li>
                                <li>Laboratorio: {{$producto->ficha->laboratorio->name}}</li>
                            </ul>
                        </div>
                        <!-- .product__info / end -->
                        <!-- .product__sidebar -->
                        <div class="product__sidebar">
                            <div class="product__availability">Stock:
                                @if ($producto->stock > 0)
                                    <span class="text-success">Disponible</span>
                                @else
                                    <span class="text-danger">No Disponible</span>
                                @endif
                            </div>
                            <div class="product__prices">$ {{ number_format($producto->precio_venta, 0, ",", "."); }}</div>
                            <!-- .product__options -->
                            <form class="product__options">
                                <div class="form-group product__option">
                                    <label class="product__option-label" for="product-quantity">Cantidad</label>
                                    <div class="product__actions">
                                        <div class="product__actions-item">
                                            <div class="input-number product__quantity">
                                                <input id="product-quantity"
                                                    class="input-number__input form-control form-control-lg" type="number"
                                                    min="1" value="1">
                                                <div class="input-number__add"></div>
                                                <div class="input-number__sub"></div>
                                            </div>
                                        </div>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                            <button class="btn btn-primary btn-lg">Añadir al Carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- .product__options / end -->
                        </div>
                        <!-- .product__end -->
                        <div class="product__footer">
                            {{-- <div class="product__tags tags">
                                <div class="tags__list"><a href="#">Shampoo</a> <a href="#">Cabello</a> <a
                                        href="#">Cuidado Capilar</a></div>
                            </div> --}}
                            {{-- <div class="product__share-links share-links">
                                <ul class="share-links__list">
                                    <li class="share-links__item share-links__item--type--like"><a href="#">Like</a></li>
                                    <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a></li>
                                    <li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a></li>
                                    <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="product-tabs">
                    <div class="product-tabs__list">
                        <a href="#tab-specification"
                            class="product-tabs__item product-tabs__item--active">Especificacion</a>
                        <a href="#tab-description" class="product-tabs__item">Descripción</a>
                    </div>
                    <div class="product-tabs__content">
                        <div class="product-tabs__pane product-tabs__pane--active" id="tab-specification">
                            <div class="spec">
                                <div class="spec__section">
                                    <h4 class="spec__section-title">Especificaciones</h4>
                                    <div class="spec__row">
                                        <div class="spec__name">Categoría</div>
                                        <div class="spec__value">{{ $producto->categoria->name }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Principio Activo</div>
                                        <div class="spec__value">{{ $producto->ficha->principio_activo }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Código</div>
                                        <div class="spec__value">{{ $producto->sku }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Laboratorio</div>
                                        <div class="spec__value">{{ $producto->ficha->laboratorio->name }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Registro ISP</div>
                                        <div class="spec__value">{{ $producto->ficha->registro_sanitario }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Forma Farmaceútica</div>
                                        <div class="spec__value">{{ $producto->ficha->formafarmaceutica->name }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Condición de Venta</div>
                                        <div class="spec__value">{{ $producto->ficha->condicionventa->name }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Contenido</div>
                                        <div class="spec__value">{{ $producto->ficha->contenido }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Dosis Farmaceútica</div>
                                        <div class="spec__value">{{ $producto->ficha->dosis_farmaceutica }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Precio Fraccionado</div>
                                        <div class="spec__value">{{ $producto->ficha->precio_fraccionario }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Condiciones de Almacenaje</div>
                                        <div class="spec__value">{{ $producto->ficha->condiciones_almacenamiento }}
                                        </div>
                                    </div>
                                </div>
                                <div class="spec__disclaimer">La información sobre las características técnicas, el
                                    conjunto de entrega, el país de fabricación y la apariencia de los productos es solo de
                                    referencia y se basa en la información más reciente disponible en el momento de la
                                    publicación.</div>
                            </div>
                        </div>
                        <div class="product-tabs__pane" id="tab-description">
                            <div class="typography">
                                @if ($producto->informacion)
                                <h3>Descripción del producto</h3>
                                <p>{{ $producto->informacion }}</p>
                                @endif

                                @if ($producto->ficha->posologia)
                                <h3>Posología</h3>
                                <p>{{ $producto->ficha->posologia }}</p>
                                @endif

                                @if ($producto->ficha->indicaciones)
                                <h3>Indicaciones</h3>
                                <p>{{ $producto->ficha->indicaciones }}</p>
                                @endif

                                @if ($producto->ficha->advertencias)
                                <h3>Advertencias</h3>
                                <p>{{ $producto->ficha->advertencias }}</p>
                                @endif

                                @if ($producto->ficha->contraindicaciones)
                                <h3>Contraindicaciones</h3>
                                <p>{{ $producto->ficha->contraindicaciones }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Related Products</h3>
                    <div class="block-header__divider"></div>
                    <div class="block-header__arrows-list"><button class="block-header__arrow block-header__arrow--left"
                            type="button"><svg width="7px" height="11px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                            </svg></button> <button class="block-header__arrow block-header__arrow--right"
                            type="button"><svg width="7px" height="11px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                            </svg></button></div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card"><button class="product-card__quickview" type="button"><svg
                                            width="16px" height="16px">
                                            <use xlink:href="{{ asset('dist/images/sprite.svg#quickview-16') }}"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html"><img
                                                src="{{ asset('dist/images/products/product-1.jpg" alt') }}=""></a>
                                        </div>
                                        <div class=" product-card__info">
                                            <div class="product-card__name"><a href="product.html">Electric Planer Brandix
                                                    KL370090G 300 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body"><svg
                                                            class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
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
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$749.00</div>
                                        <div class="product-card__buttons"><button
                                                class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart</button> <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#wishlist-16') }}">
                                                    </use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#compare-16') }}">
                                                    </use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card"><button class="product-card__quickview" type="button"><svg
                                            width="16px" height="16px">
                                            <use xlink:href="{{ asset('dist/images/sprite.svg#quickview-16') }}"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html"><img
                                                src="{{ asset('dist/images/products/product-2.jpg" alt') }}=""></a>
                                        </div>
                                        <div class=" product-card__info">
                                            <div class="product-card__name"><a href="product.html">Undefined Tool IRadix
                                                    DPS3000SY 2700 Watts</a></div>
                                            <div class="product-card__rating">
                                                <div class="rating">
                                                    <div class="rating__body"><svg
                                                            class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div><svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal') }}">
                                                                </use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use
                                                                    xlink:href="{{ asset('dist/images/sprite.svg#star-normal-stroke') }}">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                        <div
                                                            class="rating__star rating__star--only-edge rating__star--active">
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
                                        <div class="product-card__availability">Availability: <span
                                                class="text-success">In Stock</span></div>
                                        <div class="product-card__prices">$1,019.00</div>
                                        <div class="product-card__buttons"><button
                                                class="btn btn-primary product-card__addtocart" type="button">Add To
                                                Cart</button> <button
                                                class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                                type="button">Add To Cart</button> <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#wishlist-16') }}">
                                                    </use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                            <button
                                                class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                type="button"><svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('dist/images/sprite.svg#compare-16') }}">
                                                    </use>
                                                </svg> <span
                                                    class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-products-carousel / end -->
    </div>
@endsection
