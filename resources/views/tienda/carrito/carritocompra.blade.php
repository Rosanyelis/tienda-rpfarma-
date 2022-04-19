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
            <form action="{{ url('/productos/actualizar-carrito') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        @foreach ($carritoItems as $item)
                        <tr class="cart-table__row">
                            <input type="hidden" name="producto[]" value="{{ $item->id }}">
                            <td class="cart-table__column cart-table__column--image">
                                <a href="{{ url('/productos/'.$item->id.'/detalles-producto') }}">
                                    <img src="{{ $item->attributes->foto }}" alt="{{ $item->name }}" />
                                </a>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a href="#" class="cart-table__product-name">{{ $item->name }}</a>
                                <ul class="cart-table__options">
                                    <li>{{$item->attributes->tipo}}</li>
                                </ul>
                            </td>
                            <td class="cart-table__column cart-table__column--price" carritoItems-title="Price">
                                $ {{ number_format($item->price, 0, ",", "."); }}
                            </td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="input-number">
                                    <input class="form-control input-number__input" type="number" name="quantity[]" min="1" value="{{ $item->quantity }}" />
                                    <div class="input-number__add"></div>
                                    <div class="input-number__sub"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total" data-title="Total">
                                $ {{ number_format($item->price, 0, ",", "."); }}
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
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    (function($) {
        "use strict";
        $(".suma .cant").each(function() {
            sum += parseFloat($(this).text());
        });

    })(jQuery);
    </script>
@endsection
