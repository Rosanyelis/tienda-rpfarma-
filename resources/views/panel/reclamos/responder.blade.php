@extends('layouts.app')
@section('contenido')
    <div class="nk-content">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-body">
                    <div class="nk-msg">
                        <div class="nk-msg-body bg-white profile-shown">
                            <div class="nk-msg-head">
                                <h4 class="title d-none d-lg-block">Cliente {{ $data->user->cliente->nombre }} {{ $data->user->cliente->apellido }}</h4>
                                <div class="nk-msg-head-meta">
                                    <div class="d-none d-lg-block">
                                        <ul class="nk-msg-tags">
                                            <li>
                                                <span class="label-tag">
                                                    <em class="icon ni ni-flag-fill"></em>
                                                    <span>{{ $data->tipo }}</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="nk-msg-actions">
                                        <li>
                                            <a href="#" class="btn btn-dim btn-sm btn-outline-light">
                                                <em class="icon ni ni-check"></em>
                                                <span>Marcar como Cerrado</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-msg-head -->
                            <div class="nk-msg-reply nk-reply" data-simplebar>
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
                                <form class="nk-reply-form" action="{{ url('admin/reclamos-y-sugerencias/'.$data->id.'/enviar-respuesta') }}" method="POST">
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
    <script src="{{ asset('assets/js/apps/messages.js?ver=2.9.0') }}"></script>
    <script>
        (function(NioApp, $) {
            'use strict';

            @include('layouts.alerts')


        })(NioApp, jQuery);
    </script>
@endsection
