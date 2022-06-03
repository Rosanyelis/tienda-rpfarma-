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
            <div class="row pt-0 mt-0">
                <div class="col-md-8">
                    <section class="post__section ">
                        <h4 class="post__section-title">Reclamo Nro. #{{ $data->codigo }}</h4>
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
                        <h4 class="post__section-title">Responder Reclamo</h4>
                        <form method="POST"
                            action="{{ url('/mi-perfil/'.$data->id.'/responder-reclamo') }}">
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
