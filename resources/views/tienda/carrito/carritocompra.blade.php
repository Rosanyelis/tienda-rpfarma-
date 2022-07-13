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
            <div id="alerta" class="alert alert-danger mb-3 d-none" >
                <strong>
                    NOTA: LOS SIGUIENTES MEDICAMENTOS SOLO ES POSIBLE DISPENSARLOS EN NUESTRA TIENDA, NO SE REALIZAN DESPACHOS A DOMICILIO DE PRODUCTOS CONTROLADOS NI REFRIGERADOS
                </strong>
                <ul class="mt-2">
                    @foreach ($carritoItems as $item)
                        @if ($item->attributes->tipo == 'Receta Retenida, Retiro en local' || $item->attributes->tipo == 'Receta Médica, Producto Refrigerado, Retiro en Tienda')
                            <li>{{ $item->name }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <form class="formProductos" action="{{ url('/productos/actualizar-carrito') }}" method="POST" enctype="multipart/form-data">
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
                            <th class="cart-table__column cart-table__column--product">
                                Receta
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
                            <th class="cart-table__column cart-table__column--remove">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="cart-table__body">
                        @foreach ($carritoItems as $item)
                        <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image" data-id="{{ $item->id }}">
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
                            <td class="cart-table__column cart-table__column--product" data-title="{{ $item->attributes->tipo }}">
                                @php
                                    $palabra = substr($item->attributes->tipo, 0, 6);
                                @endphp
                                @if ($palabra === 'Receta')
                                <input class="form-control campor" type="file" name="recetas[]">
                                @else
                                <ul class="cart-table__options">
                                    <li>No requiere Receta</li>
                                </ul>
                                @endif
                            </td>
                            <td class="cart-table__column cart-table__column--price" carritoItems-title="Price">
                                $ {{ number_format($item->price, 0, ",", "."); }}
                            </td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="input-number">
                                    <input class="form-control input-number__input" type="number" name="quantity" min="1" max="5" value="{{ $item->quantity }}" />
                                    <div class="input-number__add"></div>
                                    <div class="input-number__sub"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total" data-title="Total">
                                $ {{ number_format($item->price, 0, ",", "."); }}
                            </td>
                            <td class="cart-table__column cart-table__column--remove" data-title="remover">
                                <a href="{{ url('/productos/'.$item->id.'/remover-producto-ajax') }}" class="btn btn-light btn-sm btn-svg-icon">
                                    <svg width="12px" height="12px">
                                        <use xlink:href="{{ asset('dist/images/sprite.svg#cross-12') }}"></use>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <input class="productosCart" type="hidden" name="productos" value="">
                <div class="cart__actions mb-5">
                    <div class="cart__coupon-form"></div>
                    <div class="cart__buttons">
                        <a href="{{ url('/productos') }}" class="btn btn-light">Continuar Comprando</a>
                        <button type="button" class="checkout btn btn-primary">Finalizar Compra</button>
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
        var ImagenBase64;
        var Productos = [];
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        var tipor = 0;
        $(".cart-table tbody tr").each(function(){
            var title = $(this).find('td').eq(2).data('title');
            if (title == 'Receta Retenida, Retiro en local' || title == 'Receta Médica, Producto Refrigerado, Retiro en Tienda') {
                tipor = tipor += 1;
            }

            if (tipor>0) {
                $('#alerta').removeClass('d-none');
            }
        });

        $('.checkout').click(function() {
            var validar = true;

            $(".cart-table tbody tr").each(function(){
                let id = $(this).find('td').eq(0).data('id');
                let img = $(this).find('td').eq(2).find('.campor').val();
                let quantity = $(this).find('td').eq(4).find('input[name="quantity"]').val();
                let receta;
                if (img == '') {
                    Toast.fire({
                        icon: 'error',
                        title: 'Ingresar archivo de receta es obligatorio'
                    });
                    validar = false;
                }
                switch ($(this).find('td').eq(2).data('title')) {
                    case 'Receta':
                    receta = img;
                    break;
                    case 'Receta Retenida':
                    receta = img;
                    break;
                    case 'Receta Retenida, Retiro en local':
                    receta = img;
                    break;
                    case 'Receta Médica, Producto Refrigerado, Retiro en Tienda':
                    receta = img;
                    break;
                    case 'Receta Cheque':
                    receta = img;
                    break;
                    case 'Venta Libre':
                    receta = 'No lleva receta';
                    break;
                    case 'Sin Receta':
                    receta = 'No lleva receta';
                    break;
                    case 'Sin Información':
                    receta = 'No lleva receta';
                    break;
                    default:
                        receta = null;
                    break
                }
                var datosFila = {};
                datosFila.id = id;
                datosFila.receta = receta;
                datosFila.quantity = quantity;

                Productos.push(datosFila);
            });
            let data = JSON.stringify(Productos);
            $('.productosCart').val(data);
            if (validar == true) {
                $('.formProductos').submit();
            }else{
                Productos.splice(0,Productos.length);
            }

        });



    })(jQuery);
    </script>
@endsection
