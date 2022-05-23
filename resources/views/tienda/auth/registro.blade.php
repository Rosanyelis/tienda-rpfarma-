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
                            Registrarme
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6 d-flex mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Registro</h3>
                            <form class="row" action="{{ url('/guardar-registro') }}" method="POST">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label for="checkout-email">Correo Electrónico</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="checkout-email" placeholder="Ejemplo: Example@example.com"
                                        value="{{ old('email') }}" />
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="checkout-email">Contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="**********" value="{{ old('password') }}" />
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        name="nombre" id="checkout-first-name" placeholder="Ejemplo: Angel"
                                        value="{{ old('nombre') }}" />
                                    @if ($errors->has('nombre'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nombre') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Apellido</label>
                                    <input type="text" class="form-control @error('apellido') is-invalid @enderror"
                                        name="apellido" id="checkout-last-name" placeholder="Doe"
                                        value="{{ old('apellido') }}" />
                                    @if ($errors->has('apellido'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('apellido') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-rut">Rut</label>
                                    <input type="text" oninput="checkRut(this)"
                                        class="form-control @error('rut') is-invalid @enderror" name="rut"
                                        id="checkout-rut" placeholder="Doe" value="{{ old('rut') }}" />
                                    <div class="invalid-feedback rut"></div>
                                    @if ($errors->has('rut'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('rut') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-phone">Teléfono</label>
                                    <input type="text" class="form-control @error('telefono') is-invalid @enderror"
                                        name="telefono" id="checkout-phone" placeholder="Telefono"
                                        value="{{ old('telefono') }}" />
                                    @if ($errors->has('telefono'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('telefono') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="checkout-street-address">Dirección</label>
                                    <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                                        name="direccion" id="checkout-street-address" placeholder="Direccion"
                                        value="{{ old('direccion') }}" />
                                    @if ($errors->has('direccion'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('direccion') }}
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-4">
                                    Registrarme
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function checkRut(rut) {
            // Despejar Puntos
            var valor = rut.value.replace('.', '');
            // Despejar Guión
            valor = valor.replace('-', '');
            // Aislar Cuerpo y Dígito Verificador
            cuerpo = valor.slice(0, -1);
            dv = valor.slice(-1).toUpperCase();
            // Formatear RUN
            rut.value = cuerpo + '-' + dv
            // Si no cumple con el mínimo ej. (n.nnn.nnn)
            // if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
            // Calcular Dígito Verificador
            suma = 0;
            multiplo = 2;
            // Para cada dígito del Cuerpo
            for (i = 1; i <= cuerpo.length; i++) {
                // Obtener su Producto con el Múltiplo Correspondiente
                index = multiplo * valor.charAt(cuerpo.length - i);
                // Sumar al Contador General
                suma = suma + index;
                // Consolidar Múltiplo dentro del rango [2,7]
                if (multiplo < 7) {
                    multiplo = multiplo + 1;
                } else {
                    multiplo = 2;
                }
            }
            // Calcular Dígito Verificador en base al Módulo 11
            dvEsperado = 11 - (suma % 11);
            // Casos Especiales (0 y K)
            dv = (dv == 'K') ? 10 : dv;
            dv = (dv == 0) ? 11 : dv;
        }
    </script>
@endsection
