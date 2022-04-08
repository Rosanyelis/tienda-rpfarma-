@extends('layouts.layoutienda')
@section('content')
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
                        <li class="breadcrumb-item active" aria-current="page">
                            Carrito de Compra
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Carrito de Compra</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column--image">
                            Foto
                        </th>
                        <th class="cart-table__column cart-table__column--product">
                            Producto
                        </th>
                        <th class="cart-table__column cart-table__column--price">
                            Precio
                        </th>
                        <th class="cart-table__column cart-table__column--quantity">
                            Cantidad
                        </th>
                        <th class="cart-table__column cart-table__column--total">
                            Total
                        </th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                </thead>
                <tbody class="cart-table__body">
                    @foreach ($data as $item)
                    <tr class="cart-table__row">
                        <td class="cart-table__column cart-table__column--image">
                            <a href="{{ $item->urlShow }}"><img src="{{ $item->producto_foto }}" alt="" /></a>
                        </td>
                        <td class="cart-table__column cart-table__column--product">
                            <a href="#" class="cart-table__product-name">{{ $item->producto_name }}</a>
                            @switch($item->producto_tipoventa)
                                @case($item->producto_tipoventa == 'Receta')
                                <div class="product-card__badge product-card__badge--sale">
                                    <ul class="cart-table__options">
                                        <input type="file" class="form-control" placeholder="Cargar receta">
                                    </ul>
                                </div>
                                @break
                                @case($item->producto_tipoventa == 'Receta Retenida')
                                <div class="product-card__badge product-card__badge--sale">
                                    <ul class="cart-table__options">
                                        <input type="file" class="form-control" placeholder="Cargar receta">
                                    </ul>
                                </div>
                                @break
                                @case($item->producto_tipoventa == 'Receta Retenida y Control de Stock')
                                <div class="product-card__badge product-card__badge--sale">
                                    <ul class="cart-table__options">
                                        <input type="file" class="form-control" placeholder="Cargar receta">
                                    </ul>
                                </div>
                                @break
                                @case($item->producto_tipoventa == 'Receta Cheque')
                                <div class="product-card__badge product-card__badge--sale">
                                    <ul class="cart-table__options">
                                        <input type="file" class="form-control" placeholder="Cargar receta">
                                    </ul>
                                </div>
                                @break
                                @default
                                @break
                            @endswitch

                        </td>
                        <td class="cart-table__column cart-table__column--price" data-title="Price">
                            $ {{ number_format($item->precio, 0, ",", "."); }}
                        </td>
                        <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            <div class="input-number">
                                <input class="form-control input-number__input" type="number" min="1" value="{{ $item->cantidad }}" />
                                <div class="input-number__add"></div>
                                <div class="input-number__sub"></div>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--total" data-title="Total">
                            $ {{ number_format($item->precio, 0, ",", "."); }}
                        </td>
                        <td class="cart-table__column cart-table__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="{{ asset('dist/images/sprite.svg#cross-12') }}"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="cart__actions mb-5">
                <div class="cart__coupon-form"></div>
                <div class="cart__buttons">
                    <a href="{{ url('/productos') }}" class="btn btn-light">Continuar Comprando</a>
                    <a href="{{ url('/productos/carrito-de-compra/'.$codigo.'/checkout') }}" class="btn btn-primary">Checkout</a>
                </div>
            </div>

        </div>
    </div>
@endsection
