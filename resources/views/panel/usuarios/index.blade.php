@extends('layouts.app')
@section('contenido')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Usuarios</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="{{ url('/configuraciones/usuarios/crear-usuario') }}" class="btn btn-primary">
                                        <em class="icon ni ni-plus-medi-fill"></em>
                                        <span>Crear Usuario</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div>
        @include('layouts.alerts')
        <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th width="50px" class="nk-tb-col"><span>#</span></th>
                    <th class="nk-tb-col tb-col-sm"><span>USUARIOS</span></th>
                    <th class="nk-tb-col tb-col-sm"><span>CORREO</span></th>
                    <th class="nk-tb-col tb-col-sm"><span>ROL</span></th>
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
                        <span class="tb-product">
                            <span class="title">{{ $item->email }}</span>
                        </span>
                    </td>
                    <td class="nk-tb-col tb-col-sm">
                        <span class="tb-product">
                            <span class="title">{{ $item->rol->name }}</span>
                        </span>
                    </td>
                    <td class="nk-tb-col tb-col-sm">
                        <span class="tb-product">
                            <span class="title">
                                @if ($item->estatus == 'Activo')
                                <span class="badge badge-success">{{$item->estatus}}</span>
                                @else
                                <span class="badge badge-danger">{{$item->estatus}}</span>
                                @endif
                        </span>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                            <li class="mr-n1">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Editar Categoría</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>Ver Categoría</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Eliminar Categoría</span></a></li>
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
@endsection
