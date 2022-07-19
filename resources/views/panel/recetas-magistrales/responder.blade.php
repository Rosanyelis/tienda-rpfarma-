@extends('layouts.app')
@section('contenido')
<div class="nk-content">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Ver Solicitud</h3>
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
                            <div class="col-md-6 col-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Solicitante:</label> {{ $data->nombre }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Correo del Solicitante:</label> {{ $data->mail }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Dirección:</label> {{ $data->direccion }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-0">
                                    <label class="form-label">Teléfono:</label> {{ $data->telefono }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Estatus:</label> {{ $data->estado }}
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">Precio:</label>$ {{ $data->precio }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-4">Recetas Adjuntas</h6>
                            <div class="row g-gs">
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
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
                        </div>
                    </div>
                </div>
                <div class="nk-msg mt-4">
                    <div class="nk-msg-body bg-white profile-shown">
                        <div class="nk-msg-head">
                            <h4 class="title d-none d-lg-block">Conversación</h4>
                        </div>
                        <div class="nk-msg-reply nk-reply" data-simplebar>
                            @if (!$data->user_id)
                            <div class="nk-reply-item">
                                <div class="nk-reply-header">
                                    <div class="user-card">
                                        <div class="user-avatar sm bg-blue">
                                            <span><em class="icon ni ni-user-fill"></em></span>
                                        </div>
                                        <div class="user-name">{{ $data->nombre }}</div>
                                    </div>
                                    <div class="date-time">{{ \Carbon\Carbon::parse($data->fecha_creacion)->translatedFormat('d F, Y h:i A')  }}</div>
                                </div>
                                <div class="nk-reply-body">
                                    <div class="nk-reply-entry entry">
                                        <p>{{ $data->mensaje }}</p>
                                    </div>
                                </div>
                            </div><!-- .nk-reply-item -->
                            @endif
                            @foreach ($conversacion as $item)
                            @if ($item->cliente_id)
                            <div class="nk-reply-item">
                                <div class="nk-reply-header">
                                    <div class="user-card">
                                        <div class="user-avatar sm bg-blue">
                                            <span><em class="icon ni ni-user-fill"></em></span>
                                        </div>
                                        <div class="user-name">{{ $data->user->cliente->nombre }} {{ $data->user->cliente->apellido }}</div>
                                    </div>
                                    <div class="date-time">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                </div>
                                <div class="nk-reply-body">
                                    <div class="nk-reply-entry entry">
                                        <p>{{ $item->mensaje }}</p>
                                    </div>
                                </div>
                            </div><!-- .nk-reply-item -->
                            @endif
                            @if ($item->user_id)
                            <div class="nk-reply-item">
                                <div class="nk-reply-header">
                                    <div class="user-card">
                                        <div class="user-avatar sm bg-pink">
                                            <span><em class="icon ni ni-user-fill"></em></span>
                                        </div>
                                        <div class="user-name">Soporte RpFarma</div>
                                    </div>
                                    <div class="date-time">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                </div>
                                <div class="nk-reply-body">
                                    <div class="nk-reply-entry entry">
                                        <p>{{ $item->mensaje }}</p>
                                    </div>
                                </div>
                            </div><!-- .nk-reply-item -->
                            @endif
                            @endforeach
                            <form class="nk-reply-form" action="{{ url('admin/recetas-magistrales/'.$data->id_registro.'/responder-solicitud') }}" method="POST">
                                @csrf
                                <div class="nk-reply-form-header">
                                    <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#reply-form">Responder</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="reply-form">
                                        <div class="nk-reply-form-editor">
                                            @if (!$data->precio)
                                            <div class="nk-reply-form-field">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label class="form-label" for="categoria">Precio de Receta</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control @error('precio_receta') error @enderror"
                                                                    id="PR" name="precio_receta" value="0" min="0" max="" placeholder="Debe Tener Valor 0">
                                                            @if ($errors->has('precio_receta'))
                                                                <span id="fv-full-name-error" class="invalid">
                                                                    {{ $errors->first('precio_receta') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label class="form-label" for="categoria">Precio de Despacho</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control @error('precio_despacho') error @enderror"
                                                            id="PD" name="precio_despacho" placeholder="Debe Tener Valor 0"
                                                            value="0" min="0" max="">
                                                            @if ($errors->has('precio_despacho'))
                                                                <span id="fv-full-name-error" class="invalid">
                                                                    {{ $errors->first('precio_despacho') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label class="form-label" for="categoria">Precio de Total</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control @error('precio_total') error @enderror"
                                                            id="PT" name="precio_total" readonly>
                                                            @if ($errors->has('precio_total'))
                                                                <span id="fv-full-name-error" class="invalid">
                                                                    {{ $errors->first('precio_total') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label class="form-label" for="categoria">Tiempo de Despacho (días)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control @error('tiempo_despacho') error @enderror"
                                                            id="PT" name="tiempo_despacho" value="0" min="0" max="10" placeholder="Debe Tener Valor 0">
                                                            @if ($errors->has('tiempo_despacho'))
                                                                <span id="fv-full-name-error" class="invalid">
                                                                    {{ $errors->first('tiempo_despacho') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="nk-reply-form-field">
                                                <textarea class="form-control form-control-simple no-resize" name="respuesta" placeholder="Hello"></textarea>
                                                @if ($errors->has('respuesta'))
                                                    <span id="fv-full-name-error" class="invalid">
                                                        {{ $errors->first('respuesta') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="nk-reply-form-tools">
                                                <ul class="nk-reply-form-actions g-1">
                                                    <li class="mr-2">
                                                        <button class="btn btn-primary" type="submit">Responder</button>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-reply-form-tools -->
                                        </div><!-- .nk-reply-form-editor -->
                                    </div>
                                </div>


                            </form><!-- .nk-reply-form -->

                        </div><!-- .nk-reply -->
                    </div><!-- .nk-msg-body -->
                </div><!-- .nk-msg -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        (function(NioApp, $){
            'use strict';

            $('#PR').change(function() {
                var data = parseInt($('#PD').val());
                if (data >= 0) {
                    var data2 = parseInt($('#PR').val());
                    let data3 = data + data2;
                    $('#PT').val(data3);
                }
            });

            $('#PD').change(function() {
                var data = parseInt($('#PD').val());
                if (data >= 0) {
                    var data2 = parseInt($('#PR').val());
                    let data3 = data + data2;
                    $('#PT').val(data3);
                }
            });

        })(NioApp, jQuery);
    </script>
@endsection
