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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TÉRMINOS Y CONDICIONES DEL USO DEL RECETARIO MAGISTRAL
                        ONLINE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify ">
                    <h6><strong>1. De las características del servicio</strong></h6>
                    <p>Rp Farma cuenta con el servicio de Recetario Magistral On Line, en el cual el paciente (usuario
                        registrado), puede cotizar, comprar y dispensar sus recetas magistrales de forma remota.
                        Las condiciones particulares de cada preparado magistral serán objeto de revisión por parte del
                        Director Técnico de Rp Farma al momento de comunicar la intención de cotizar, las cuales quedan
                        reflejadas en este documento.
                    </p>
                    <h6><strong>2. Respecto del uso del servicio</strong></h6>
                    <p>
                        Rp Farma, solo podrá aceptar a pacientes o adquirentes mayores de 18 años, que acepten las
                        condiciones del servicio. Toda información entregada por el usuario se entiende fidedigna y correcta
                        para los procesos posteriores a la cotización de la receta magistral.
                        Al aceptar los Términos y Condiciones del sitio www.farmaciasrpfarma.cl se entiende que estas
                        condiciones del servicio podrían tener actualizaciones periódicas.
                    </p>
                    <h6><strong>3. Preparados bajo venta de recetas médica controladas</strong></h6>
                    <p>
                        El paciente debe enviar el archivo de su receta para análisis, revisión y autorización, para poder
                        ser cotizada. Si el preparado contiene algún medicamento que es sujeto de control legal, este
                        documento debe ser visado por la Dirección Técnica.
                        En caso positivo, el paciente o adquiriente debe llevar este documento a la sucursal de Rp Farma que
                        está legalmente habilitada para su dispensación.
                        En caso negativo, el paciente será notificado en su apartado de cliente registrado y las razones de
                        tal determinación.
                    </p>
                    <h6><strong>4. Precio y forma de pago</strong></h6>
                    <p>
                        Rp Farma, una vez recepcionada la solicitud de cotización, tendrá un plazo máximo de 48 horas para
                        dar respuesta al paciente, solo en días hábiles, enviará la cotización por el preparado magistral el
                        cual tendrá una validez de una semana.
                        El sitio proveerá el mecanismo de pago electrónico, para cancelar con tarjeta de crédito, débito.
                        Estos medios de pagos podrían variar en la medida de las mejoras tecnológicas de los proveedores de
                        este servicio y siempre estarán sujetas a los contratos entre las entidades financieras y sus
                        clientes.
                    </p>
                    <h6><strong>5. Consentimiento de la compra</strong></h6>
                    <p>
                        Farmacias Rp Farma, ofrece el servicio de recetas magistrales indicando los términos y condiciones
                        para que el paciente o adquiriente pueda utilizar nuestros servicios de forma informada. Una vez
                        aceptado el precio de la transacción, con toda la información del proceso, plazos mediante un
                        contacto en su apartado de usuario y/o mail, se acepta el pago del mismo, se procederá a la
                        elaboración de su preparado, del cual no podrá retractarse.
                    </p>
                    <h6><strong>6. Entrega o retiro de los preparados magistrales</strong></h6>
                    <p>
                        Rp Farma informará al usuario del tiempo de elaboración y fecha de retiro, la cual no deberá ser
                        superior a las 48 horas desde su pago.
                        Según el tipo de preparado, con las consideraciones legales correspondientes, se coordinará el
                        despacho a su domicilio, en el caso de los medicamentos que no requieren control legal o de saldos.
                        Para las recetas que requieran de control, estas serán enviadas o despachadas desde el local de
                        farmacia coordinado previamente, lo cual será debidamente informado en su apartado de usuario y/o
                        por mail.
                        A destacar, los preparados magistrales cuentan con 40 días de vigencia para su utilización, lo que
                        obliga a Rp Farma a disponer para destrucción a aquellos preparados que se encuentren para despacho
                        por mas de 3 días desde la fecha del contacto con el adquiriente o paciente. Es decir, en resguardo
                        de la salud del paciente, estos productos no serán entregados si estos plazos no son respetados.
                    </p>
                    <h6><strong>7. Retracto legal</strong></h6>
                    <p>
                        Dada la naturaleza del servicio de elaboración de recetas magistrales, no operará el retracto por
                        parte del usuario.
                    </p>
                    <h6><strong>8. Cambio o devoluciones</strong></h6>
                    <p>
                        Si el producto, presentara fallas o defectos de origen, estas serán reembolsados al paciente hasta
                        después de 7 días de efectuado el pago. Si estos daños son atribuibles al mal uso o transporte del
                        paciente esto, no dará derecho a esta garantía.
                    </p>
                    <h6><strong>9. Privacidad</strong></h6>
                    <p>
                        Este servicio, como todos los datos entregados a Rp Farma están sujetos a las políticas de
                        privacidad del sitio.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card flex-grow-1 mb-0">
                <div class="card-body">
                    <h3 class="card-title text-center">Sube tu receta</h3>
                    <form class="row" action="{{ url('/guardar-receta') }}" method="POST"
                        enctype="multipart/form-data">
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
                                        name="imagen" id="checkout-last-name" accept="" />
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
                        <div class="col-md-12">
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

            $('#exampleModal').modal('show');
        })(jQuery);
        // let close_button = document.getElementById('close-button');
        //     close_button.addEventListener("click", function(e) {
        //     e.preventDefault();
        //     document.getElementById("window-notice").style.display = "none";
        // });
    </script>
@endsection
