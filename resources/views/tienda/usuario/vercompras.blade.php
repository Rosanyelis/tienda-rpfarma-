

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
                            Lista de compras
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Lista de compras</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <form class="formProductos" action="{{ url('/productos/actualizar-carrito') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="cart__table cart-table">
                    <thead class="cart-table__head">
                        <tr class="cart-table__row">
                            <th class="cart-table__column cart-table__column--product">
                               Nro. Orden
                            </th>
                            <th class="cart-table__column cart-table__column--product">
                                Productos
                            </th>
                            <th class="cart-table__column cart-table__column--product">
                                Estatus
                            </th>

                            <th class="cart-table__column cart-table__column--remove"></th>
                        </tr>
                    </thead>


                    <tbody class="cart-table__body">






                    </tbody>
                </table>
                <input class="productosCart" type="hidden" name="productos" value="">
                <div class="cart__actions mb-5">
                    <div class="cart__coupon-form"></div>
                    <div class="cart__buttons">

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

        $('.checkout').click(function() {
            var validar = true;

            $(".cart-table tbody tr").each(function(){
                let id = $(this).find('td').eq(0).data('id');
                // let countimg = $(this).find('td').eq(2).find('input[name="receta"]')[0].files[0];
                // let countimg = $(this).find('td').eq(2).find('input[name="receta"]')[0].files.length;
                let img = $(this).find('td').eq(2).find('input[name="receta"]').val();
                let quantity = $(this).find('td').eq(4).find('input[name="quantity"]').val();
                console.log(img);
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
                    case 'Receta Retenida y Control de Stock':
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
    // function encodeImageFileAsURL(element) {
    //     var file = element.files[0];
    //     var reader = new FileReader();
    //     reader.onloadend = function() {
    //         ImagenBase64 = reader.result;

    //     }
    //     reader.readAsDataURL(file);
    // }
    </script>
