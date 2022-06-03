@extends('layouts.app')
@section('contenido')
    <div class="nk-content">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Conversación</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <a href="{{ url('admin/reclamos-y-sugerencias') }}" class="btn btn-secondary">
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
                <div class="nk-content-body">
                    <div class="nk-msg">
                        <div class="nk-msg-body bg-white profile-shown">
                            <div class="nk-msg-head">
                                @if ($data->user)
                                <h4 class="title d-none d-lg-block">Usuario {{ $data->user->cliente->nombre }} {{ $data->user->cliente->apellido }}</h4>
                                @else
                                <h4 class="title d-none d-lg-block">Usuario {{ $data->name }}</h4>
                                @endif

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
                                    @if ($data->estatus == 'Abierto')
                                    <ul class="nk-msg-actions">
                                        <li>
                                            <a href="{{ url('admin/reclamos-y-sugerencias/'.$data->id.'/cierre-de-reclamo') }}" class="btn btn-dim btn-sm btn-outline-light">
                                                <em class="icon ni ni-check"></em>
                                                <span>Marcar como Cerrado</span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                </div>
                            </div><!-- .nk-msg-head -->
                            <div class="nk-msg-reply nk-reply" data-simplebar>
                                @if (!$data->user_id)
                                <div class="nk-reply-item">
                                    <div class="nk-reply-header">
                                        <div class="user-card">
                                            <div class="user-avatar sm bg-blue">
                                                <span><em class="icon ni ni-user-fill"></em></span>
                                            </div>
                                            <div class="user-name">{{ $data->name }}</div>
                                        </div>
                                        <div class="date-time">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                    </div>
                                    <div class="nk-reply-body">
                                        <div class="nk-reply-entry entry">
                                            <p>{{ $data->comentario }}</p>
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
                                @if ($data->user)
                                    @if ($data->estatus == 'Abierto')
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
                                    @endif
                                @endif
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
