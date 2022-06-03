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
                            Mi Perfil
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Orden Nro. #{{ $data->nro_orden }}</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <strong class="form-label">Cliente:</strong> {{ $data->cliente->nombre }}
                                {{ $data->cliente->apellido }}
                            </div>
                            <div class="form-group">
                                <strong class="form-label">Rut:</strong> {{ $data->cliente->rut }}
                            </div>
                            <div class="form-group">
                                <strong class="form-label">Dirección:</strong> {{ $data->cliente->direccion }}
                            </div>
                            <div class="form-group">
                                <strong class="form-label">Teléfono:</strong> {{ $data->cliente->telefono }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="form-label">Fecha:</strong>
                                {{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('d F, Y h:i A') }}
                            </div>
                            <div class="form-group">
                                <strong class="form-label">Tipo de Recepción:</strong> {{ $data->tipo_recepcion }}
                            </div>
                            @if ($data->local)
                                <div class="form-group">
                                    <strong class="form-label">Local de Recepción:</strong> {{ $data->local }}
                                </div>
                            @endif

                            @if ($data->comuna)
                                <div class="form-group">
                                    <strong class="form-label">Comuna:</strong> {{ $data->comuna }}
                                </div>
                            @endif
                            @if ($data->telefono_receptor)
                                <div class="form-group">
                                    <strong class="form-label">Teléfono de Receptor:</strong>
                                    {{ $data->telefono_receptor }}
                                </div>
                            @endif
                            @if ($data->correo_receptor)
                                <div class="form-group">
                                    <strong class="form-label">Correo del Receptor:</strong>
                                    {{ $data->correo_receptor }}
                                </div>
                            @endif
                            @if ($data->direccion_pedido)
                                <div class="form-group">
                                    <strong class="form-label">Dirección de Entrega:</strong>
                                    {{ $data->direccion_pedido }}
                                </div>
                            @endif
                        </div>
                        @if ($data->motivo_rechazo)
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong class="form-label">Motivo de Rechazo:</strong> {{ $data->motivo_rechazo }}
                            </div>
                        </div>
                        @endif
                    </div>
                    <table class="cart__table cart-table mt-3">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column">Producto</th>
                                <th class="cart-table__column">Cant.</th>
                                <th class="cart-table__column">Precio Unitario</th>
                                <th class="cart-table__column">Total</th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            @foreach ($orden as $item)
                                <tr class="cart-table__row">
                                    <td class="cart-table__column ">{{ $item->producto->name }}</td>
                                    <td class="cart-table__column ">{{ $item->cantidad }}</td>
                                    <td class="cart-table__column ">$ {{ $item->precio }}</td>
                                    <td class="cart-table__column ">$ {{ $item->precio * $item->cantidad }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </tfoot>
                        <tfoot class="cart-table__body">
                            <tr class="cart-table__row">
                                <th class="cart-table__column" colspan="3" style="text-align: right">Subtotal</th>
                                <td class="cart-table__column " colspan="1" style="text-align: left"><b>$
                                        {{ $data->subtotal }}</b></td>
                            </tr>
                            <tr class="cart-table__row">
                                <th class="cart-table__column" colspan="3" style="text-align: right">Envío</th>
                                <td class="cart-table__column " colspan="1" style="text-align: left"><b>$
                                        {{ $data->envio }}</b></td>
                            </tr>
                            <tr class="cart-table__row">
                                <th class="cart-table__column" colspan="3" style="text-align: right">Total</th>
                                <td class="cart-table__column " colspan="1" style="text-align: left"><b>$
                                        {{ $data->monto }}</b></td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="row mt-4">
                        <div class="col-md-12 mb-4">
                            <h4>Recetas subidas</h4>
                        </div>

                        @foreach ($recetas as $item)
                        <div class="col-md-4">
                            <img src="{{ asset($item->url_receta) }}" width="60%" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        (function($) {
            "use strict";

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

        })(jQuery);
    </script>
@endsection
