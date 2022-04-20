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
            <form class="row" action="{{ url('/productos/completar-compra') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Detalles de Cliente</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">Nombre</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        id="checkout-first-name" placeholder="Ejemplo: Angel" />
                                    @if ($errors->has('nombre'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nombre') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Apellido</label>
                                    <input type="text" class="form-control @error('apellido') is-invalid @enderror"
                                        name="apellido" id="checkout-last-name" placeholder="Doe" />
                                    @if ($errors->has('apellido'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('apellido') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Rut</label>
                                    <input type="text" class="form-control @error('rut') is-invalid @enderror" name="rut"
                                        id="checkout-last-name" placeholder="Doe" />
                                    @if ($errors->has('rut'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('rut') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-phone">Teléfono</label>
                                    <input type="text" class="form-control @error('telefono') is-invalid @enderror"
                                        name="telefono" id="checkout-phone" placeholder="Telefono" />
                                    @if ($errors->has('telefono'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('telefono') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="checkout-street-address">Dirección</label>
                                <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                                    name="direccion" id="checkout-street-address" placeholder="Direccion" />
                                @if ($errors->has('direccion'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('direccion') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="checkout-email">Correo Electrónico</label>
                                    <input type="email" class="form-control @error('correo') is-invalid @enderror"
                                        name="correo" id="checkout-email" placeholder="Ejemplo: Example@example.com" />
                                    @if ($errors->has('correo'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('correo') }}
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Adjunto de Recetas</h3>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <input type="file" class="form-control" name="recetas[]" />
                                </div>
                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary btnAgg">Agregar</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <strong><p><em>En caso de haber medicamentos que requieran recetas y no sean adjuntadas, su compra será rechazada al pasar por el proceso de verificación.</em></p></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6 mt-4 mt-lg-0">
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
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="total"></td>
                                    </tr>
                                </tfoot>
                            </table>
                            {{-- <div class="payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active">
                                            <label class="payment-methods__item-header"><span
                                                    class="payment-methods__item-radio input-radio"><span
                                                        class="input-radio__body"><input class="input-radio__input"
                                                            name="checkout_payment_method" type="radio"
                                                            checked="checked" />
                                                        <span class="input-radio__circle"></span> </span></span><span
                                                    class="payment-methods__item-title">Banco Directo
                                                    transfer</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    Realiza tu pago directamente en nuestra cuenta bancaria.
                                                    Utilice su ID de pedido como referencia de pago.
                                                    Su pedido no será enviado hasta que los fondos
                                                    han liquidado en nuestra cuenta.
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item">
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
                                        </li>
                                    </ul>
                                </div> --}}
                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-terms" />
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
                            <input class="monto" type="hidden" name="monto" value="">
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

                var sum = 0;
                $(".suma .cant").each(function() {
                    sum += parseFloat($(this).text());
                });

                $('.subtotal').text('$' + sum);
                    $('.monto').val(sum); $('.total').text('$' + sum);
                })(jQuery);
    </script>
@endsection
