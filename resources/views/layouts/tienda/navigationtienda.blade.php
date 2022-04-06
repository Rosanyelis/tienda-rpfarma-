<div class="nav-panel__row">
    <div class="nav-panel__departments">
        <!-- .departments -->
        <div class="departments" data-departments-fixed-by="">
            <div class="departments__body">
                <div class="departments__links-wrapper">
                    <ul class="departments__links">
                        @foreach ($categorias as $item)
                        <li class="departments__item">
                            <a href="#">{{ $item->name }}
                            @if (count($item->subcategorias) > 0)
                            <svg class="departments__link-arrow" width="6px" height="9px">
                                <use xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                            </svg>
                            @endif
                            </a>
                            @if (count($item->subcategorias) > 0)
                            <div class="departments__megamenu departments__megamenu--sm">
                                <!-- .megamenu -->
                                <div class="megamenu megamenu--departments">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="megamenu__links megamenu__links--level--0">
                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                    <a href="#">{{ $item->name }}</a>
                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                    @foreach ($item->subcategorias as $item)
                                                        <li class="megamenu__item">
                                                            <a href="#">{{ $item->name }}</a>
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- .megamenu / end -->
                            </div>
                            @endif
                        </li>
                        @endforeach
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
                <a href="{{ url('/') }}"><span>Inicio</span></a>
            </li>
            <li class="nav-links__item">
                <a href="#">
                    <span>Quiénes Somos</span>
                </a>
            </li>
            <li class="nav-links__item">
                <a href="{{ url('productos') }}">
                    <span>Productos</span>
                </a>
            </li>
            <li class="nav-links__item">
                <a href="{{ url('contactenos') }}">
                    <span>Contáctenos</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- .nav-links / end -->
    <div class="nav-panel__indicators">
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
