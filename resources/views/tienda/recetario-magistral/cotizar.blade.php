@extends ('layouts.layoutienda')
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
                            Recetario Magistral
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Por Favor Confirmar</h5>
                </div>
                <div class="modal-body container text-justify">
                    <p >Nota: antes de efectuar el proceso de registro de su receta magistral debe indicar lo siguiente:</p>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" value="Si" id="mayorEdad">
                            <label class="custom-control-label" for="mayorEdad">Soy Mayor de Edad</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="defaultCheck1">
                            ¿Eres el adquiriente del producto?
                        </label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adquirientev" id="inlineRadio1" value="Si">
                            <label class="form-check-label" for="inlineRadio1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adquirientev" id="inlineRadio2" value="No">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="entiendo">Entiendo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card flex-grow-1 mb-0">
                <div class="card-body">
                    <h3 class="card-title text-center">Sube tu receta</h3>
                    <form class="row" action="{{ url('/guardar-receta') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="row">
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
                                <div class="form-group @if (!Auth::user()) col-md-7 @else col-md-12 @endif">
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
                                @if (!Auth::user())
                                    <div class="form-group col-md-5">
                                        <label for="checkout-email">Contraseña</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="**********" value="{{ old('password') }}" />
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                <div class="form-group col-md-12">
                                    <label class="form-check-label @error('direccione') is-invalid @enderror" for="defaultCheck1">
                                        ¿Deseas entrega a domicilio?
                                    </label><br>
                                    <div class="form-check form-check-inline ">
                                        <input class="form-check-input " type="radio" name="domicilio" id="domicilioSi" value="Si">
                                        <label class="form-check-label" for="domicilioSi">Si</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="domicilio" id="domicilioNo" value="No">
                                        <label class="form-check-label" for="domicilioNo">No</label>
                                    </div>
                                    @if ($errors->has('domicilio'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('domicilio') }}
                                        </div>
                                    @endif
                                </div>
                                <div id="direccionEntrega" class="form-group col-md-12">
                                    <label for="checkout-direccione">Dirección de entrega</label>
                                    <input type="text" class="form-control @error('direccione') is-invalid @enderror"
                                        name="direccione" id="checkout-direccione" placeholder="direccione"
                                        value="{{ old('direccione') }}" />
                                    @if ($errors->has('direccione'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('direccione') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <small>
                                        <strong>Nota:</strong> Si ya posee un usuario solo coloque su correo electrónico
                                        para validar su información.<br>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="checkout-email">Mensaje</label>
                                    <textarea rows="3" name="mensaje" class="form-control @error('mensaje') is-invalid @enderror"
                                        placeholder="Escribe tu mensaje...">{{ old('mensaje') }}</textarea>
                                    @if ($errors->has('mensaje'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('mensaje') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <p>
                                        Adjunte la receta.<br>
                                        La receta se puede subir desde el celular o computador. <br>
                                        El formato de imagen debe estar en: GIF, PNG , JPG, JPEG o PDF. <br>
                                    </p>
                                    <input type="file" class="form-control @error('imagen') is-invalid @enderror"
                                        name="imagen" id="checkout-file" accept="" />
                                    @if ($errors->has('imagen'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('imagen') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12">
                                    <small>
                                        Si presenta problemas al cargar su receta, por favor enviar, <strong> nombre y
                                            apellidos,
                                            dirección de despacho </strong> (el valor de la cotización incluye despacho),
                                        y <strong>receta</strong> al correo electrónico
                                        <strong>contacto@farmaciasrpfarma.cl</strong>
                                    </small>
                                    <p class="mt-1">
                                        <strong>Información:</strong><br>
                                        - La receta magistral será cotizada y fabricado por RP Farma<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input @error('terminos') is-invalid @enderror" type="checkbox" name="terminos" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    He leído y acepto los
                                    <a target="_blank"
                                        href="{{ url('/terminos-y-condiciones-de-recetario-magistral') }}">términos y
                                        condiciones</a> del recetario magistral
                                </label>
                                @if ($errors->has('terminos'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('terminos') }}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-12 mt-4">
                            <input type="hidden" name="adquiriente" id="valAdquiriente" value="">
                            <input type="hidden" name="mayorEdad" id="valMayorEdad" value="">
                            <button class="btn btn-primary btn-block">ENVIAR COTIZACIÓN</button>
                        </div>
                    </form>
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
            $('#staticBackdrop').modal('show');

            $('#entiendo').on('click', function() {
                let mayorEdad = false;
                if( $('#mayorEdad').is(':checked') ){
                    mayorEdad = true;
                }
                let adquiriente = $('input[name=adquirientev]').val();
                console.log(adquiriente);
                if (mayorEdad == false) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Debe ser mayor Edad para solicitar una receta magistral'
                    });
                }else{
                    $('#valAdquiriente').val(adquiriente);
                    $('#valMayorEdad').val(mayorEdad);
                    $('#staticBackdrop').modal('hide');
                }
            });


            $('#direccionEntrega').hide();

            $('#domicilioSi').on('click', function() {
                $('#direccionEntrega').show();
            });

            $('#domicilioNo').on('click', function() {
                $('#direccionEntrega').hide();
            });


        })(jQuery);
    </script>
@endsection
