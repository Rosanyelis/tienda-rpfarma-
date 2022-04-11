@extends('layouts.app')
@section('contenido')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Crear Rol</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="{{ url('/configuraciones/roles') }}" class="btn btn-secondary">
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
                    <form action="{{ url('admin/configuraciones/roles/guardar-rol') }}" class="form-validate" method="POST">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="categoria">Nombre de Rol</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('password') invalid @enderror"
                                                id="categoria" name="name" value="{{ old('name') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('name'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="categoria">Descripción de Rol</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control form-control-sm @error('descripcion"') invalid @enderror" id="fv-message" name="descripcion">{{ old('descripcion') }}</textarea>
                                        @if ($errors->has('descripcion'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('descripcion') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
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
