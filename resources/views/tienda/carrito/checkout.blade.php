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
                            Detalles de Pago
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            {{-- <div > --}}
            <form class="row" action="{{ url('/productos/completar-compra') }}" method="POST">
                @csrf
                @if (!Auth::user())
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title">Detalles de Cliente</h3>
                                <p>Para finalizar la compra debes registrarte o iniciar sesión.</p>
                                <div class="form-row">
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
                                    <div class="form-group">
                                        <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox" id="cuenta"
                                                        name="cuenta" />
                                                    <span class="input-check__box"></span>
                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                        <use xlink:href="{{ asset('dist/images/sprite.svg#check-9x7') }}">
                                                        </use>
                                                    </svg>
                                                </span>
                                            </span>
                                            <label class="form-check-label" for="cuenta">
                                                No poseo cuenta, deseo registrarme
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div id="registerClient" class="form-row">
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
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-12 col-lg-6 @if (Auth::user()) col-xl-12 @else col-xl-6 @endif mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Tu Orden</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cant.</th>
                                        <th width="75px">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    @foreach ($carritoItems as $item)
                                        <tr>
                                            <td>
                                                <b>{{ $item->name }}</b> - {{ $item->attributes->tipo }}
                                            </td>
                                            <td>{{ $item->quantity }}</td>
                                            <td class="suma">
                                                <span>$</span>
                                                <span class="cant">{{ $item->price * $item->quantity }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td colspan="2" class="subtotal"></td>
                                    </tr>
                                    <tr>
                                        <th>Envío</th>
                                        <td colspan="2" class="envio"></td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="total"></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" type="radio" checked="checked" />
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Información de Envío </span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted" style="text-align: justify">
                                                Rp Farma realizará los despachos a través de la empresa “RV Transportes”<br><br>
                                                Los pedidos  recepcionados hasta las 15:00 hrs serán despachados el siguiente
                                                día hábil, los pedidos recepcionados después de las 15:00 hrs serán despachados
                                                el día hábil subsiguiente. <br><br>
                                                Los despachos se realizaran de Lunes a Viernes de 15:00 a 21:00 hrs,
                                                Sábados, Domingos y Festivos no se realizaran envíos.<br><br>
                                                En caso de que la persona no se encuentre en el domicilio al
                                                momento de la entrega, se contactará para ver si hay un adulto
                                                    quien podrá recibir el pedido y en caso de que no se pueda contactar
                                                    el despacho se reagendará para el día hábil siguiente, previo al nuevo
                                                    pago de los gastos de envío.<br><br>
                                                El comprador será responsable de encontrarse en el lugar de despacho
                                                dentro de las horas y el día especificado al momento de la compra,
                                                Rp Farma no reembolsará el valor del despacho en caso de que el cliente no se encuentre.<br>
                                                El cliente podrá retirar los productos en tienda de manera gratuita,
                                                de Lunes a Viernes de 09:00hrs a 18:00 hrs o al día hábil siguiente.<br><br>
                                                <strong>• Américo Vespucio 0410, local J, Comuna de Quilicura.</strong><br><br>
                                                Cobertura solo Región Metropolitana.
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="payment-methods__item">
                                        <label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio" />
                                                    <span class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">PayPal</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pagar a través de PayPal; puedes pagar con tu tarjeta de credito
                                                si no tiene una cuenta de PayPal.
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="payment-methods">
                                <h5>Tipo de Recepción</h5>
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio" value="Retiro en local"/>
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Retiro en local</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                <div class="form-group">
                                                    <label>Locales </label>
                                                    <select class="form-control" name="local">
                                                        <option>Seleccione local...</option>
                                                        <option value="Local Quilicura">Local Quilicura</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio" value="Entrega a domicilio" />
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Entrega a domicilio</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                <div class="form-group">
                                                    <label>Comuna</label>
                                                    <select class="form-control" name="comuna">
                                                        <option>Seleccione Comuna...</option>
                                                        <option value="Santiago">Santiago</option>
                                                        <option value="Conchalí">Conchalí</option>
                                                        <option value="Huechuraba">Huechuraba</option>
                                                        <option value="Independencia">Independencia</option>
                                                        <option value="Quilicura">Quilicura</option>
                                                        <option value="Recoleta">Recoleta</option>
                                                        <option value="Renca">Renca</option>
                                                        <option value="Las Condes">Las Condes</option>
                                                        <option value="Lo Barnechea">Lo Barnechea</option>
                                                        <option value="Providencia">Providencia</option>
                                                        <option value="Vitacura">Vitacura</option>
                                                        <option value="La Reina">La Reina</option>
                                                        <option value="Macul">Macul</option>
                                                        <option value="Ñuñoa">Ñuñoa</option>
                                                        <option value="Peñalolén">Peñalolén</option>
                                                        <option value="La Florida">La Florida</option>
                                                        <option value="La Granja">La Granja</option>
                                                        <option value="El Bosque">El Bosque</option>
                                                        <option value="La Cisterna">La Cisterna</option>
                                                        <option value="La Pintana">La Pintana</option>
                                                        <option value="San Ramón">San Ramón</option>
                                                        <option value="Lo Espejo">Lo Espejo</option>
                                                        <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                                        <option value="San Joaquín">San Joaquín</option>
                                                        <option value="San Miguel">San Miguel</option>
                                                        <option value="Cerrillos">Cerrillos</option>
                                                        <option value="Estación Central">Estación Central</option>
                                                        <option value="Maipú">Maipú</option>
                                                        <option value="Cerro Navia">Cerro Navia</option>
                                                        <option value="Lo Prado">Lo Prado</option>
                                                        <option value="Pudahuel">Pudahuel</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección de recepción</label>
                                                    <textarea rows="3" class="form-control" name="direccion_recepcion" placeholder="Direccion"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Telefono de Contacto del Receptor del Pedido</label>
                                                    <input type="text" class="form-control" name="telefono_receptor" placeholder="telefono">
                                                </div>
                                                <div class="form-group">
                                                    <label>Correo de Contacto del Receptor del Pedido (opcional)</label>
                                                    <input type="text" class="form-control" name="correo_receptor" placeholder="example@example.com">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @if ($errors->has('checkout_payment_method'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('checkout_payment_method') }}
                                    </div>
                                @endif
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-terms"
                                                name="terminos" required />
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="{{ asset('dist/images/sprite.svg#check-9x7') }}"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label class="form-check-label" for="checkout-terms">
                                        He leído y acepto los
                                        <a target="_blank" href="{{ url('/terminos-y-condiciones') }}">términos y
                                            condiciones</a> del sitio web*</label>
                                </div>
                            </div>
                            <input class="subtotal" type="hidden" name="subtotal" value="">
                            <input class="envio" type="hidden" name="envio" value="">
                            <input class="monto" type="hidden" name="monto" value="">
                            <input type="hidden" name="users"
                                value="@if (Auth::user()) {{ Auth::user()->id }} @endif">
                            <button type="submit" class="btn btn-primary btn-xl btn-block">
                                Completar Orden
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            {{-- </div> --}}

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        (function($) {
                "use strict";

                $('#registerClient').hide();

                $("#cuenta").on("change", function() {
                    if ($('#cuenta').is(':checked')) {
                        $("#cuenta").val('1');
                        $('#registerClient').show();
                    } else {
                        $('#registerClient').hide();
                    }
                });

                var sum = 0;
                $(".suma .cant").each(function() {
                    sum += parseFloat($(this).text());
                });

                if (sum > 30000) {
                    $('.envio').text('$' + 0);
                        var envio = 0;
                }else if (sum == 0) {
                    $('.envio').text('$' + 0);
                        var envio = 0;
                } else {
                    $('.envio').text('$' + 4000);
                        var envio = 4000;
                }

                $('.subtotal').text('$' + sum);
                $('.subtotal').val(sum);
                $('.envio').val(envio);
                var total = sum += envio; $('.total').text('$' + total);
                $('.monto').val(total);
            })(jQuery);

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
