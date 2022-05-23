@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Editar Producto</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ url('admin/productos') }}" class="btn btn-secondary">
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
                        <form action="{{ url('admin/productos/'.$data->id.'/actualizar-producto') }}" class="form-validate" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-gs">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="categoria">Nombre de Producto</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') error @enderror"
                                                    id="categoria" name="name" value="{{ $data->name }}" placeholder="Ejm: Artículos Personales">
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
                                            <input type="text" class="form-control @error('sku') error @enderror"
                                                    id="sku" name="sku" value="{{ $data->sku }}" placeholder="Ejm: Artículos Personales">
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
                                            <input type="text" class="form-control @error('precio_venta') error @enderror"
                                                    id="precio_venta" name="precio_venta" value="{{ $data->precio_venta }}" placeholder="Ejm: Artículos Personales">
                                            @if ($errors->has('precio_venta'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('precio_venta') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="categoria">Foto de Producto</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('foto') error @enderror"
                                            id="foto" name="foto" value="{{ $data->foto }}" placeholder="Ejm: /storage/Productos/nombre de foto.jpg">

                                            {{-- <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input @error('foto') error @enderror" id="customFile">
                                                <label  class="custom-file-label" for="customFile">Seleccione una Foto</label>
                                                @if ($errors->has('foto'))
                                                    <span id="fv-full-name-error" class="invalid">
                                                        {{ $errors->first('foto') }}
                                                    </span>
                                                @endif
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">Stock</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('stock') error @enderror"
                                                    id="stock" name="stock" value="{{ $data->stock }}" placeholder="Ejm: Artículos Personales">
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
                                        <label class="form-label" for="forma_farmaceutica_id">Forma Farmaceútica</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('forma_farmaceutica_id') error @enderror" name="forma_farmaceutica_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($forma_farmaceutica as $item)
                                                <option value="{{ $item->id }}" @if ( $item->id == $data->ficha->forma_farmaceutica_id) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('forma_farmaceutica_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('forma_farmaceutica_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="tipo_administracion_id">Tipo de Administración</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('tipo_administracion_id') error @enderror" name="tipo_administracion_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($tipoadministracion as $item)
                                                <option value="{{ $item->id }}" @if ( $item->id == $data->ficha->tipo_administracion_id) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('tipo_administracion_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('tipo_administracion_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="laboratorio_id">Laboratorio</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('laboratorio_id') error @enderror" name="laboratorio_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($laboratorios as $item)
                                                <option value="{{ $item->id }}" @if ( $item->id == $data->ficha->laboratorio_id) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('laboratorio_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('laboratorio_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="registro_sanitario">Registro Sanitario</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('registro_sanitario') error @enderror"
                                                    id="registro_sanitario" name="registro_sanitario" value="{{ $data->ficha->registro_sanitario }}" placeholder="Ejm: Artículos Personales">
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
                                        <label class="form-label" for="categoria_id">Categoría</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('categoria_id') error @enderror" name="categoria_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($categorias as $item)
                                                <option value="{{ $item->id }}" @if ($item->id == $data->categoria_id) selected @else @endif>{{ $item->name }}</option>
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
                                        <label class="form-label" for="condicion_venta_id">Condición de Venta</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select @error('condicion_venta_id') error @enderror" name="condicion_venta_id" data-placeholder="Seleccione una opción">
                                                <option label="empty" value=""></option>
                                                @foreach ($condicion_venta as $item)
                                                <option value="{{ $item->id }}" @if ( $item->id == $data->ficha->condicion_venta_id) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('condicion_venta_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('condicion_venta_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="subcategoria_id">Subcategorías</label>
                                        <div class="form-control-wrap">
                                            <select class="form-control form-select form-control-select-multiple" name="subcategorias[]" id="subcategoria_id" multiple>
                                                @foreach ($subcategorias as $item)
                                                    <option value="{{ $item->id }}" @if (collect($data->subcategorias)->contains('subcategoria_id', $item->id)) selected @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('subcategoria_id'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('subcategoria_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="informacion">Información del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('informacion') error @enderror"
                                                    id="informacion" name="informacion" placeholder="Ejm: Artículos Personales">{{ $data->informacion }}</textarea>
                                            @if ($errors->has('informacion'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('informacion') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="principio_activo">Principio Activo del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('principio_activo') error @enderror"
                                                    id="principio_activo" name="principio_activo" placeholder="Ejm: Artículos Personales">{{ $data->ficha->principio_activo }}</textarea>
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
                                        <label class="form-label" for="principio_activo">Excipiente del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('excipiente') error @enderror"
                                                    id="excipiente" name="excipiente" placeholder="Ejm: Artículos Personales">{{ $data->ficha->excipiente }}</textarea>
                                            @if ($errors->has('excipiente'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('excipiente') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="dosis_farmaceutica">Dósis Farmaceutica</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('dosis_farmaceutica') error @enderror"
                                                    id="dosis_farmaceutica" name="dosis_farmaceutica" placeholder="Ejm: Artículos Personales">{{ $data->ficha->dosis_farmaceutica }}</textarea>
                                            @if ($errors->has('dosis_farmaceutica'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('dosis_farmaceutica') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="precio_fraccionado">Precio Fraccionado</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('precio_fraccionario') error @enderror"
                                                    id="precio_fraccionario" name="precio_fraccionario" placeholder="Ejm: Artículos Personales">{{ $data->ficha->precio_fraccionario }}</textarea>
                                            @if ($errors->has('precio_fraccionario'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('precio_fraccionario') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="condiciones_almacenamiento">Condiciones de Almacenamiento</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('condiciones_almacenamiento') error @enderror"
                                                    id="condiciones_almacenamiento" name="condiciones_almacenamiento" placeholder="Ejm: Artículos Personales">{{ $data->ficha->condiciones_almacenamiento }}</textarea>
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
                                            <textarea type="text" class="form-control @error('indicaciones') error @enderror"
                                                    id="indicaciones" name="indicaciones" placeholder="Ejm: Artículos Personales">{{ $data->ficha->indicaciones }}</textarea>
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
                                        <label class="form-label" for="posologia">Posología del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('posologia') error @enderror"
                                                    id="posologia" name="posologia" placeholder="Ejm: Artículos Personales">{{ $data->ficha->posologia }}</textarea>
                                            @if ($errors->has('posologia'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('posologia') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="sobredosis">Sobredósis</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('sobredosis') error @enderror"
                                                    id="sobredosis" name="sobredosis" placeholder="Ejm: Artículos Personales">{{ $data->ficha->sobredosis }}</textarea>
                                            @if ($errors->has('sobredosis'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('sobredosis') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="advertencias">Advertencias del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('advertencias') error @enderror"
                                                    id="advertencias" name="advertencias" placeholder="Ejm: Artículos Personales">{{ $data->ficha->advertencias }}</textarea>
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
                                        <label class="form-label" for="interacciones">Interacciones del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('interacciones') error @enderror"
                                                    id="interacciones" name="interacciones" placeholder="Ejm: Artículos Personales">{{ $data->ficha->interacciones }}</textarea>
                                            @if ($errors->has('interacciones'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('interacciones') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="contraindicaciones">Contraindicaciones del Producto</label>
                                        <div class="form-control-wrap">
                                            <textarea type="text" class="form-control @error('contraindicaciones') error @enderror"
                                                    id="contraindicaciones" name="contraindicaciones" placeholder="Ejm: Artículos Personales">{{ $data->ficha->contraindicaciones }}</textarea>
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
</div>
@endsection
