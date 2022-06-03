<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gestión Administrativa de Tienda Online RPFARMA.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Login | Panel Administrativo RpFarma</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.9.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.9.0') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo  text-center">
                            <a href="javascript:void();" class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg"
                                    src="{{ asset('images/logo-RpFARMA.png') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <form method="POST" action="{{ url('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Correo Electrónico</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email"
                                                class="form-control form-control-lg @error('email') invalid @enderror"
                                                id="default-01" placeholder="example@example.com"
                                                value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Contraseña</label>
                                            <a class="link link-primary link-sm" href="javascript:void();">Olvidé mi
                                                contraseña?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password"
                                                class="form-control form-control-lg @error('password') invalid @enderror"
                                                id="password" placeholder="**********">
                                            @if ($errors->has('password'))
                                                <span id="fv-full-name-error" class="invalid">
                                                    {{ $errors->first('password') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Iniciar Sesión</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> ¿No posee cuenta? <a
                                        href="javascript:void();">Registrarme</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terminos y Condiciones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Politicas de Privacidad</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2021 Tienda RPFARMA. Todos los Derechos
                                            Reservados.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.9.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.9.0') }}"></script>
    <script>
        (function(NioApp, $) {
            'use strict';
            @include('layouts.alerts')
        })(NioApp, jQuery);
    </script>
</body>

</html>
