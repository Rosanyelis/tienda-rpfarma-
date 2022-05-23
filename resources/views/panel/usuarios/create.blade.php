@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Crear Usuario</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ url('/configuraciones/usuarios') }}" class="btn btn-secondary">
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
                        <form action="{{ url('admin/configuraciones/usuarios/guardar-usuario') }}" class="form-validate" method="POST">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="usuario">Nombre de Usuario</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('password') invalid @enderror"
                                                    id="usuario" name="name" value="{{ old('name') }}" placeholder="Ejm: Artículos Personales">
                                            @if ($errors->has('name'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('name') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Correo</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('email') invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}" placeholder="Ejm: Artículos Personales">
                                            @if ($errors->has('email'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control @error('password') invalid @enderror"
                                                    id="password" name="password" value="{{ old('password') }}" placeholder="Ejm: Artículos Personales">
                                            @if ($errors->has('password'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('password') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="usuario">Rol</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('rol_id') error @enderror" name="rol_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($roles as $item)
                                                <option value="{{ $item->id }}" @if ( $item->id == old('rol_id')) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('rol_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('rol_id') }}
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
</div>
@endsection
