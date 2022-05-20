@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Condiciones de venta</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ url('admin/configuraciones/condiciones-venta/crear-condiciones-venta') }}" class="btn btn-primary">
                                            <em class="icon ni ni-plus-medi-fill"></em>
                                            <span>Crear Condicion de venta</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div>
            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th width="50px" class="nk-tb-col"><span>#</span></th>
                        <th class="nk-tb-col tb-col-sm"><span>CONDICIONES DE VENTA</span></th>
                        <th class="nk-tb-col tb-col-sm">ESTATUS</th>
                        <th width="50px" class="nk-tb-col"></th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col">{{ $loop->iteration }}</td>
                        <td class="nk-tb-col tb-col-sm">
                            <span class="tb-product">
                                <span class="title">{{ $item->name }}</span>
                            </span>
                        </td>
                        <td class="nk-tb-col tb-col-sm">
                            @if ($item->estatus == 'Activo')
                            <span class="badge badge-success">{{$item->estatus}}</span>
                            @else
                            <span class="badge badge-danger">{{$item->estatus}}</span>
                            @endif
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li class="mr-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="{{ url('admin/configuraciones/condiciones-venta/'.$item->id.'/editar-condiciones-venta') }}" >
                                                        <em class="icon ni ni-edit"></em>
                                                        <span>Editar Condiciones de venta</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button class="btn delete-record" data-id="{{ $item->id }}">
                                                        <em class="icon ni ni-trash"></em>
                                                        <span>Eliminar Condiciones de venta</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table><!-- .nk-tb-list -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        (function(NioApp, $){
            'use strict';

            @include('layouts.alerts')

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.datatable-init tbody').on('click', '.delete-record', function(){
                let dataid = $(this).data('id');
                let baseUrl = '{{ url('admin/configuraciones/condiciones-venta') }}/' + dataid +
                    '/eliminar-condiciones-venta';
                Swal.fire({
                    title: '¿Está Seguro de Desactivar el Registro?',
                    text: "Si tiene datos dependientes, no podrá desactivarlo!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, estoy seguro!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: 'POST',
                            url: baseUrl,
                            dataType: 'json',
                            success: function(response) {
                               console.log(response);
                                localStorage.setItem("success", 1);
                                location.reload();
                            }
                        });
                    }
                });
            });
        })(NioApp, jQuery);
    </script>
@endsection

