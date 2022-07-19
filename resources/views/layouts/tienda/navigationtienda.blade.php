<div class="nav-panel__row">
    <div class="nav-panel__departments">
        <!-- .departments -->
        <div class="departments" data-departments-fixed-by="">
            <div class="departments__body">
                <div class="departments__links-wrapper">
                    <ul class="departments__links">
                        @foreach ($categorias as $item)
                            <li class="departments__item">
                                <a href="@if ($item->name == 'Recetario Magistral')
                                    {{ url('recetario-magistral') }}
                                @elseif ($item->name == 'Medicamentos')
                                    {{ url('buscar-medicamentos') }}
                                @else
                                    {{ url('/productos/' . $item->id . '/categoria') }}
                                @endif">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <button class="departments__button">
                <svg class="departments__button-icon" width="18px" height="14px">
                    <use xlink:href="{{ asset('dist/images/sprite.svg#menu-18x14') }}"></use>
                </svg> Categorias
                <svg class="departments__button-arrow" width="9px" height="6px">
                    <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-down-9x6') }}"></use>
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
                <a href="{{ url('quienes-somos') }}">
                    <span>Quiénes Somos</span>
                </a>
            </li>
            <li class="nav-links__item">
                <a href="{{ url('recetario-magistral') }}">
                    <span>Recetario Magistral</span>
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
            <a href="{{ url('/productos/ver-carrito-de-compras') }}" class="indicator__button">
                <span class="indicator__area">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{ asset('dist/images/sprite.svg#cart-20') }}"></use>
                    </svg>
                    <span class="indicator__value">{{ count($carritoItems) }}</span>
                </span>
            </a>
            <div class="indicator__dropdown">
                <!-- .dropcart -->
                <div class="dropcart">
                    <div class="dropcart__products-list">
                        @foreach ($carritoItems as $item)
                            <div class="dropcart__product">
                                <div class="dropcart__product-image">
                                    <a href="{{ url('/productos/' . $item->id . '/detalles-producto') }}">
                                        <img src="{{ $item->attributes->foto }}" alt="{{ $item->name }}" />
                                    </a>
                                </div>
                                <div class="dropcart__product-info">
                                    <div class="dropcart__product-name">
                                        <a href="{{ url('/productos/' . $item->id . '/detalles-producto') }}">
                                            {{ $item->name }}
                                        </a>
                                    </div>
                                    <div class="dropcart__product-meta">
                                        <span class="dropcart__product-quantity">{{ $item->quantity }}</span>
                                        x
                                        <span class="dropcart__product-price">$
                                            {{ number_format($item->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                <form action="{{ url('/productos/remover-producto-del-carrito') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <input type="hidden" value="/productos" name="url">
                                    <button type="submit"
                                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                        <svg width="10px" height="10px">
                                            <use xlink:href="{{ asset('dist/images/sprite.svg#cross-10') }}"></use>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <div class="dropcart__buttons">
                        <form action="{{ url('/productos/remover-todos-los-producto-del-carrito') }}" method="POST">
                            @csrf
                            <input type="hidden" value="/productos" name="url">
                            <button type="submit" class="btn btn-secondary delete-product-car">Limpiar</button>
                        </form>
                        <a href="{{ url('/productos/ver-carrito-de-compras') }}"
                            class="btn btn-primary verificar-car">Ver Carrito</a>
                    </div>
                </div>
                <!-- .dropcart / end -->
            </div>
        </div>
        <div class="indicator dropdown-toggle" data-toggle="dropdown">
            <a href="javascript:void();" class="indicator__button ">
                <span class="indicator__area">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 14.4a4.74 4.74 0 1 1 4.73-4.73A4.73 4.73 0 0 1 12 14.4Zm0-8a3.24 3.24 0 1 0 3.23 3.24A3.24 3.24 0 0 0 12 6.43V6.4Z"
                            fill="#000" />
                        <path
                            d="M19 19.28a.74.74 0 0 1-.72-.58 5.63 5.63 0 0 0-5.48-4.3h-1.6a5.63 5.63 0 0 0-5.47 4.3.752.752 0 0 1-1.46-.36 7.13 7.13 0 0 1 6.93-5.44h1.59a7.11 7.11 0 0 1 6.93 5.45.76.76 0 0 1-.55.91l-.17.02Z"
                            fill="#000" />
                        <path
                            d="M12 22.31A10.31 10.31 0 1 1 22.31 12 10.32 10.32 0 0 1 12 22.31Zm0-19.12A8.81 8.81 0 1 0 20.81 12 8.82 8.82 0 0 0 12 3.19Z"
                            fill="#000" />
                    </svg>
                    @if (Auth::check())
                        @if (Auth::user()->rol->name == 'Cliente' && isset(Auth::user()->name))
                            &nbsp;&nbsp;{{ Auth::user()->name }}
                        @endif
                    @endif

                </span>
            </a>
            @if (Auth::user())
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ url('/mi-perfil') }}" class="dropdown-item">Mi Perfil</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ url('/salir') }}">
                        @csrf
                        <a href="#" class="dropdown-item text-danger"
                            onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesion</a>
                    </form>
                </div>
            @else
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                    <form class="px-4 py-3" action="{{ url('/ingresar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/registrarme') }}">¿No Posees Cuenta? Registrate</a>
                    {{-- <a class="dropdown-item" href="#">Olvidaste tu Contraseña?</a> --}}
                </div>
            @endif
        </div>
    </div>
</div>
