@extends('layouts.app')
@section('contenido')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Categorías</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="{{ url('/configuraciones/categorias/crear-categoria') }}" class="btn btn-primary">
                                        <em class="icon ni ni-plus-medi-fill"></em>
                                        <span>Crear Categoría</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div>
        @include('layouts.alerts')

        <div class="nk-block nk-block-lg">
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="{{ url('/configuraciones/categorias/guardar-categoria') }}" class="form-validate" method="POST">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="empresa">Nombre de Empresa</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control"
                                                id="empresa" name="name" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="empresa">Rut de Empresa</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control"
                                                id="empresa" name="name" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-message">Dirección</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm" id="fv-message" name="fv-message" readonly></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
