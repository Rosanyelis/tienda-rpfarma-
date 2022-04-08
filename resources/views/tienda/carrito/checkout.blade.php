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
                            Checkout
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Checkout</h1>
            </div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Detalles de Pago</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">Nombre</label>
                                    <input type="text" class="form-control" id="checkout-first-name"
                                        placeholder="Ejemplo: Angel" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Apellido</label>
                                    <input type="text" class="form-control" id="checkout-last-name"
                                        placeholder="Doe" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-country">Comunas</label>
                                <select id="checkout-country" class="form-control">
                                    <option>Select a Comuna...</option>
                                    <option>Comuna 1</option>
                                    <option>Comuna 2</option>
                                    <option>Comuna 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">Dirección</label>
                                <input type="text" class="form-control" id="checkout-street-address"
                                    placeholder="Street Address" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="checkout-email"
                                        placeholder="Ejemplo: Example@example.com" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-phone">Teléfono</label>
                                    <input type="text" class="form-control" id="checkout-phone"
                                        placeholder="Telefono" />
                                </div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Detalles de Envío</h3>
                            <div class="form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-different-address" />
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="{{asset('dist/images/sprite.svg#check-9x7')}}"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label class="form-check-label" for="checkout-different-address">Envia a una direccion diferente?</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-comment">Pedido
                                    <span class="text-muted">(Opcional)</span>
                                </label>
                                <textarea id="checkout-comment" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Tu Orden</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{ $item->producto_name}} × {{ $item->cantidad }}
                                        </td>
                                        <td>$ {{ number_format($item->precio, 0, ",", "."); }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$5,877</td>
                                    </tr>
                                    <tr>
                                        <th>Crédito de la tienda</th>
                                        <td>$-20.00</td>
                                    </tr>
                                    <tr>
                                        <th>Envío</th>
                                        <td>$25.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>$5,882.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
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
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input"
                                                type="checkbox" id="checkout-terms" />
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="{{asset('dist/images/sprite.svg#check-9x7')}}"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-terms">He leído y acepto los
                                        <a target="_blank" href="terms-and-conditions.html">términos y
                                            condiciones</a>del sitio web*</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block">
                                Completar Orden
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
