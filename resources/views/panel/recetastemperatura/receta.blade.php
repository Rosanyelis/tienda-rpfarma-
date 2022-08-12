@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Ver Receta N° #{{ $data->id_registro }}</h3>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <a href="{{ url('admin/recetas-magistrales') }}" class="btn btn-secondary">
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
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong class="form-label">Solicitante:</strong> {{ $data->nombre }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Correo del Solicitante:</strong> {{ $data->mail }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Dirección:</strong> {{ $data->direccion }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">¿Es el Adquiriente?:</strong> {{ $data->adquiriente }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">¿Es Mayor de Edad?:</strong> @if ($data->mayor_edad == true) Si @endif
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">¿Aceptó los términos y condiciones del Recetario Magistral?:</strong> @if ($data->terminos == 'on') Si @endif
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">¿Entrega a Domicilio?:</strong> {{ $data->domicilio }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Dirección de Entrega:</strong> {{ $data->direcciondespacho }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong class="form-label">Fecha:</strong>
                                            {{ \Carbon\Carbon::parse($data->fecha_creacion)->translatedFormat('d F, Y h:i A') }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Tiempo de Entrega (Días):</strong> {{ $data->tiempo_despacho }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Precio de Receta:</strong> $ {{ $data->precio_base }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Precio de Entrega a Domicilio:</strong> $ {{ $data->precio_despacho }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Precio de Total de Cotización:</strong> $ {{ $data->precio }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Estatus:</strong> {{ $data->estado }}
                                        </div>
                                        <div class="form-group">
                                            <strong class="form-label">Temperatura de Entrega:</strong> {{ $data->temperatura_entrega }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <h6 class="mb-4">Receta Adjunta</h6>
                                <div class="gallery card card-bordered">
                                    @php
                                        $archivo = substr($data->imagen, -4);
                                    @endphp
                                    @switch($archivo)
                                        @case($archivo == '.jpg')
                                        <a class="gallery-image popup-image" href="{{asset($data->imagen)}}">
                                            <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="">
                                        </a>
                                            @break
                                        @case($archivo == '.png')
                                        <a class="gallery-image popup-image" href="{{asset($data->imagen)}}">
                                            <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="">
                                        </a>
                                            @break
                                        @case($archivo == 'jpeg')
                                        <a class="gallery-image popup-image" href="{{asset($data->imagen)}}">
                                            <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="">
                                        </a>
                                            @break
                                        @case($archivo == '.pdf')
                                        <embed src="{{asset($data->imagen)}}" type="application/pdf" width="100%" height="400px" />
                                            @break
                                        @default
                                        <a class="gallery-image popup-image" href="{{asset($data->imagen)}}">
                                            <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="">
                                        </a>
                                    @endswitch

                                </div>
                            </div>
                        </div>
                        @if (!$data->temperatura_entrega)
                        <div class="nk-msg-reply nk-reply" data-simplebar>

                            <form class="nk-reply-form" action="{{ url('admin/recetas-a-domicilio/'.$data->id_registro.'/actualizar-temperatura') }}" method="POST">
                                @csrf
                                <div class="nk-reply-form-header">
                                    <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#reply-form">Agregar Temperatura de Entrega</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="reply-form">
                                        <div class="nk-reply-form-editor">
                                            <div class="nk-reply-form-field">
                                                <textarea class="form-control form-control-simple no-resize" name="temperatura_entrega" placeholder="Hello"></textarea>
                                                @if ($errors->has('temperatura_entrega'))
                                                    <span id="fv-full-name-error" class="invalid">
                                                        {{ $errors->first('temperatura_entrega') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="nk-reply-form-tools">
                                                <ul class="nk-reply-form-actions g-1">
                                                    <li class="mr-2">
                                                        <button class="btn btn-primary" type="submit">Agregar</button>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-reply-form-tools -->
                                        </div><!-- .nk-reply-form-editor -->
                                    </div>
                                </div>


                            </form><!-- .nk-reply-form -->

                        </div><!-- .nk-reply -->
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        (function(NioApp, $){
            'use strict';



        })(NioApp, jQuery);
    </script>
@endsection
