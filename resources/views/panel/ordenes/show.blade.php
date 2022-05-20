@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Ver Orden</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ url('admin/ordenes') }}" class="btn btn-secondary">
                                            <em class="icon ni ni-arrow-left"></em>
                                            <span>Regresar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row mb-3">
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Tipo de Recepción:</label> {{ $data->tipo_recepcion }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Local de Recepción:</label> {{ $data->local }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Comuna:</label> {{ $data->comuna }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Teléfono de Receptor:</label> {{ $data->telefono_receptor }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Correo del Receptor:</label> {{ $data->correo_receptor }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Dirección de Entrega:</label> {{ $data->direccion_pedido }}
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Cliente:</label> {{ $data->cliente->nombre }} {{ $data->cliente->apellido }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Rut:</label> {{ $data->cliente->rut }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Dirección:</label> {{ $data->cliente->direccion }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Teléfono:</label> {{ $data->cliente->telefono }}
                                </div>
                            </div>
                        </div>
                        <div class="invoice-bills mb-4">
                            <h5>Productos</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-20px">Nro.</th>
                                            <th class="w-60">Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orden as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $item->producto->name }}</td>
                                            <td>$ {{ $item->precio }}</td>
                                            <td>{{ $item->cantidad }}</td>
                                            <td>$ {{ $item->precio*$item->cantidad }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Subtotal</td>
                                            <td>$ {{ $data->subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Envío</td>
                                            <td>$ {{ $data->envio }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Total Pagado</td>
                                            <td>$ {{ $data->monto }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div><!-- .invoice-bills -->
                        <div>
                            <h5 class="mb-4">Recetas Adjuntas</h5>
                            <div class="row g-gs">
                                @foreach ($recetas as $item)
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <div class="gallery card card-bordered">
                                        <a class="gallery-image popup-image" href="{{asset($item->url_receta)}}">
                                            <img class="w-100 rounded-top" src="{{asset($item->url_receta)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-md-12 ">
                                <div class="form-group float-right">
                                    @if ($data->estatus == 'Por Confirmar')
                                    <a href="" class="btn btn-lg btn-danger mr-3">Rechazar</a>
                                    <a href="{{ url('admin/ordenes/'.$data->id.'/aprobar-orden') }}" class="btn btn-lg btn-primary">Aprobar</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
