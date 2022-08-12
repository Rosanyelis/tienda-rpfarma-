@extends('layouts.layoutienda')
@section('content')
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Inicio</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Mi Perfil
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="cart block ">
        <div class="container ">
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Solicitud Nro. #{{ $data->id_registro }}</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong class="form-label">Cliente:</strong> {{ $data->nombre }}
                                    </div>
                                    <div class="form-group">
                                        <strong class="form-label">Dirección:</strong> {{ $data->direccion }}
                                    </div>
                                    <div class="form-group">
                                        <strong class="form-label">Teléfono:</strong> {{ $data->telefono }}
                                    </div>
                                    <div class="form-group">
                                        <strong class="form-label">¿Soy el Adquiriente?:</strong> {{ $data->adquiriente }}
                                    </div>
                                    <div class="form-group">
                                        <strong class="form-label">¿Soy el Mayor de Edad?:</strong> @if ($data->mayor_edad == true) Si @endif
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
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            @php
                                $archivo = substr($data->imagen, -4);
                            @endphp
                            @switch($archivo)
                                @case($archivo == '.jpg')
                                    <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="receta">
                                    @break
                                @case($archivo == '.png')
                                    <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="receta">
                                    @break
                                @case($archivo == 'jpeg')
                                    <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="receta">
                                    @break
                                @case($archivo == '.pdf')
                                <embed src="{{asset($data->imagen)}}" type="application/pdf" width="100%" height="400px" />
                                    @break
                                @default
                                    <img class="w-100 rounded-top" src="{{asset($data->imagen)}}" alt="receta">
                            @endswitch
                        </div>
                        @if ($data->estado == 'Cotizado')
                            <div class="col-md-12 text-right mt-4">
                                <a href="{{ url('/mi-perfil/'.$data->id_registro.'/rechazar-cotizacion-de-receta') }}" class="btn btn-secondary mr-3">Rechazar Cotización</a>
                                <a href="{{ url('/mi-perfil/'.$data->id_registro.'/aprobar-cotizacion-de-receta') }}" class="btn btn-primary">Aprobar</a>
                            </div>
                        @endif
                        @if ($data->estado == 'Aprobado por Cliente')
                            <div class="col-md-12 text-right mt-4">
                                <form action="{{ url('/productos/anadir-producto-al-carrito') }}" method="POST" >
                                    @csrf
                                    <input type="hidden" value="{{ $data->id_registro }}" name="id_registro">
                                    <input type="hidden" value="/mi-perfil/{{ $data->id_registro }}/ver-solicitud" name="url">
                                    <button type="submit" class="btn btn-primary product-card__addtocart">Añadir al Carrito</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row pt-0 mt-0">
                <div class="col-md-8">
                    <section class="post__section ">
                        <h4 class="post__section-title">Conversación</h4>
                        <ol class="comments-list comments-list--level--0">
                            <li class="comments-list__item">
                                @foreach ($conversacion as $item)
                                @if ($item->cliente_id)
                                <div class="comment">
                                    <div class="comment__content">
                                        <div class="comment__header">
                                            <div class="comment__author">Yo</div>
                                        </div>
                                        <div class="comment__text">{{ $item->mensaje }}</div>
                                        <div class="comment__date">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                    </div>
                                </div>
                                @endif
                                @if ($item->user_id)
                                <div class="comment-list__children">
                                    <ol class="comments-list comments-list--level--1">

                                        <li class="comments-list__item">
                                            <div class="comment">
                                                <div class="comment__content">
                                                    <div class="comment__header">
                                                        <div class="comment__author">Soporte RpFarma</div>
                                                    </div>
                                                    <div class="comment__text">{{ $item->mensaje }}</div>
                                                    <div class="comment__date">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                                </div>
                                            </div>
                                        </li>

                                    </ol>
                                </div>
                                <hr>
                                @endif
                                @endforeach
                            </li>
                        </ol>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="post__section ">
                        <h4 class="post__section-title">Responder Solicitud</h4>
                        <form method="POST"
                            action="{{ url('/mi-perfil/'.$data->id_registro.'/responder-solicitud') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="respuesta">Respuesta</label>
                                    <textarea class="form-control @error('respuesta') is-invalid @enderror" id="respuesta" name="respuesta" rows="6">{{ old('respuesta') }}</textarea>
                                    @if ($errors->has('respuesta'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('respuesta') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12 mt-2 float-rigth">
                                    <button type="submit" class="btn btn-primary btn-block">Publicar</button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        (function($) {
            "use strict";

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

        })(jQuery);
    </script>
@endsection
