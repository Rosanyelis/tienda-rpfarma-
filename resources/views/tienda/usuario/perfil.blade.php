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
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Mis Compras</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Reclamos</a>
                    <a class="nav-link" id="nav-recetas-tab" data-toggle="tab" href="#nav-recetas" role="tab"
                        aria-controls="nav-recetas" aria-selected="false">Recetas Solicitadas</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column">Nro.</th>
                                <th class="cart-table__column">Nro. Orden</th>
                                <th class="cart-table__column">Total Productos</th>
                                <th class="cart-table__column">Fecha</th>
                                <th class="cart-table__column">Estatus</th>
                                <th class="cart-table__column">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            @foreach ($ordenes as $item)
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--product">{{ $loop->iteration }}</td>
                                <td class="cart-table__column cart-table__column--product">#{{ $item->nro_orden }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->detallesCompra->count() }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->estatus }}</td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="{{ url('/mi-perfil/'.$item->id.'/ver-orden') }}" class="btn btn-primary btn-sm">Ver Orden</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column">Nro.</th>
                                <th class="cart-table__column">Id Reclamo</th>
                                <th class="cart-table__column">Tipo</th>
                                <th class="cart-table__column">Fecha</th>
                                <th class="cart-table__column">Estatus</th>
                                <th class="cart-table__column">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            @foreach ($reclamos as $item)
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--product">{{ $loop->iteration }}</td>
                                <td class="cart-table__column cart-table__column--product">#{{ $item->codigo }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->tipo }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->estatus }}</td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="{{ url('/mi-perfil/'.$item->id.'/ver-reclamo') }}" class="btn btn-primary btn-sm">Ver Reclamo</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-recetas" role="tabpanel" aria-labelledby="nav-recetas-tab">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column">Nro.</th>
                                <th class="cart-table__column">Solicitante</th>
                                <th class="cart-table__column">Teléfono</th>
                                <th class="cart-table__column">Precio</th>
                                <th class="cart-table__column">Fecha</th>
                                <th class="cart-table__column">Estatus</th>
                                <th class="cart-table__column">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            @foreach ($recetas as $item)
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--product">{{ $loop->iteration }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->nombre }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->telefono }}</td>
                                <td class="cart-table__column cart-table__column--product">$ {{ number_format($item->precio, 0, ",", "."); }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ \Carbon\Carbon::parse($item->fecha_creacion)->translatedFormat('d F, Y h:i A')  }}</td>
                                <td class="cart-table__column cart-table__column--product">{{ $item->estado }}</td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="{{ url('/mi-perfil/'.$item->id_registro.'/ver-solicitud') }}" class="btn btn-primary btn-sm">Ver Solicitud</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
