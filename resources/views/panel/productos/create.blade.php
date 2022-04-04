@extends('layouts.app')
@section('contenido')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Crear Producto</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="{{ url('admin/configuraciones/productos') }}" class="btn btn-secondary">
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
                    <form action="{{ url('admin/productos/guardar-producto') }}" class="form-validate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="categoria">Nombre de Producto</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('name') invalid @enderror"
                                                id="categoria" name="name" value="{{ old('name') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('name'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="sku">Código SKU</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('sku') invalid @enderror"
                                                id="sku" name="sku" value="{{ old('sku') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('sku'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('sku') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="precio_venta">Precio de Venta</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('precio_venta') invalid @enderror"
                                                id="precio_venta" name="precio_venta" value="{{ old('precio_venta') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('precio_venta'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('precio_venta') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="informacion">Información del Producto</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('informacion') invalid @enderror"
                                                id="informacion" name="informacion" placeholder="Ejm: Artículos Personales">{{ old('informacion') }}</textarea>
                                        @if ($errors->has('informacion'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('informacion') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="categoria">Foto de Producto</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input @error('foto') invalid @enderror" id="customFile">
                                            <label  class="custom-file-label" for="customFile">Seleccione una Foto</label>
                                            @if ($errors->has('foto'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('foto') }}
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="stock">Stock</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('stock') invalid @enderror"
                                                id="stock" name="stock" value="{{ old('stock') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('stock'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('stock') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="categoria_id">Categoría</label>
                                    <div class="form-control-wrap">
                                        <select class="form-control form-select @error('categoria_id') invalid @enderror" name="categoria_id" data-placeholder="Seleccione una opción">
                                            <option label="empty" value=""></option>
                                            @foreach ($categorias as $item)
                                            <option value="{{ $item->id }}" @if ($item->id == old('categoria_id')) selected @else @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('categoria_id'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('categoria_id') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="forma_farmaceutica">Forma Farmaceútica</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select @error('forma_farmaceutica') invalid @enderror" name="forma_farmaceutica" data-placeholder="Seleccione una opción">
                                            <option label="empty" value=""></option>
                                            <option value="Cápsulas" @if (old('forma_farmaceutica') == 'Cápsulas') selected @endif>Cápsulas</option>
                                            <option value="Unguento" @if (old('forma_farmaceutica') == 'Unguento') selected @endif>Unguento</option>
                                            <option value="Crema" @if (old('forma_farmaceutica') == 'Crema') selected @endif>Crema</option>
                                            <option value="Solución Oral" @if (old('forma_farmaceutica') == 'Solución Oral') selected @endif>Solución Oral</option>
                                            <option value="Comprimidos" @if (old('forma_farmaceutica') == 'Comprimidos') selected @endif>Comprimidos</option>
                                            <option value="Polvo para Supensión" @if (old('forma_farmaceutica') == 'Polvo para Supensión') selected @endif>Polvo para Supensión</option>
                                        </select>
                                        @if ($errors->has('forma_farmaceutica'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('forma_farmaceutica') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="registro_sanitario">Registro Sanitario</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control @error('registro_sanitario') invalid @enderror"
                                                id="registro_sanitario" name="registro_sanitario" value="{{ old('registro_sanitario') }}" placeholder="Ejm: Artículos Personales">
                                        @if ($errors->has('registro_sanitario'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('registro_sanitario') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="condicion_venta">Condición de Venta</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select @error('condicion_venta') invalid @enderror" name="condicion_venta" data-placeholder="Seleccione una opción">
                                            <option label="empty" value=""></option>
                                            <option value="Requiere Receta" @if (old('condicion_venta') == 'Requiere Receta') selected @endif>Requiere Receta</option>
                                            <option value="Venta Libre" @if (old('condicion_venta') == 'Venta Libre') selected @endif>Venta Libre</option>
                                        </select>
                                        @if ($errors->has('condicion_venta'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('condicion_venta') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="principio_activo">Principio Activo del Producto</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('principio_activo') invalid @enderror"
                                                id="principio_activo" name="principio_activo" placeholder="Ejm: Artículos Personales">{{ old('principio_activo') }}</textarea>
                                        @if ($errors->has('principio_activo'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('principio_activo') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="condiciones_almacenamiento">Condiciones de Almacenamiento</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('condiciones_almacenamiento') invalid @enderror"
                                                id="condiciones_almacenamiento" name="condiciones_almacenamiento" placeholder="Ejm: Artículos Personales">{{ old('condiciones_almacenamiento') }}</textarea>
                                        @if ($errors->has('condiciones_almacenamiento'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('condiciones_almacenamiento') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="indicaciones">Indicaciones del Producto</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('indicaciones') invalid @enderror"
                                                id="indicaciones" name="indicaciones" placeholder="Ejm: Artículos Personales">{{ old('indicaciones') }}</textarea>
                                        @if ($errors->has('indicaciones'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('indicaciones') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="advertencias">Advertencias del Producto</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('advertencias') invalid @enderror"
                                                id="advertencias" name="advertencias" placeholder="Ejm: Artículos Personales">{{ old('advertencias') }}</textarea>
                                        @if ($errors->has('advertencias'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('advertencias') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="contraindicaciones">Contraindicaciones del Producto</label>
                                    <div class="form-control-wrap">
                                        <textarea type="text" class="form-control @error('contraindicaciones') invalid @enderror"
                                                id="contraindicaciones" name="contraindicaciones" placeholder="Ejm: Artículos Personales">{{ old('contraindicaciones') }}</textarea>
                                        @if ($errors->has('contraindicaciones'))
                                            <span id="fv-full-name-error" class="invalid">
                                                {{ $errors->first('contraindicaciones') }}
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
