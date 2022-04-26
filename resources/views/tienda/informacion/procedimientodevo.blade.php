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
                            Procedimiento de Devoluciones
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="document">
                <div class="document__header">
                    <h1 class="document__title">Procedimiento de Devoluciones</h1>
                    {{-- <div class="document__subtitle">
                        This Agreement was last modified on 27 May 2018.
                    </div> --}}
                </div>
                <div class="document__content typography" style="text-align: justify;">
                    <p>
                        En <strong>Farmacias Rp Farma</strong>, en compromiso con su salud y garantizando la mejor atención
                        a nuestros
                        pacientes. Tenemos contemplado realizar cambios y devoluciones, en las siguientes situaciones:
                    </p>
                    <h5>1. Si no llegó lo que compraste o tu pedido no está completo</h5>
                    <ul>
                        <li>Nosotros nos haremos responsables de completar tu pedido, de retirar lo que no corresponda o de
                            devolver tu dinero de la compra en un plazo máximo de 5 días hábiles, sin costo para usted. La
                            devolución de dinero o anulaciones de transacciones dependen del operador de sus tarjetas o
                            banco.</li>
                        <li>Comunícate con nosotros a nuestros canales de atención, nuestro mail: contacto@rpfarma.cl,
                            nuestro WhatsApp +56 9 4140 9095 o directamente a nuestro teléfono +56 9 4140 9095. Te
                            solicitaremos
                            el número de pedido y que tengas tu boleta a mano.</li>
                    </ul>
                    <h5>2. Si no quieres lo que compraste o te equivocaste. </h5>
                    <p>
                        Tenemos considerado ayudarte, pero hay algunas limitaciones que debes tener en cuenta:
                    </p>
                    <ul>
                        <li>No puede pasar más de 15 días corridos desde que recibiste los productos.</li>
                        <li>Hay algunas situaciones, productos o tipos de productos que legalmente no podemos devolver:</li>
                    </ul>
                    <div class="container">
                        <ol>
                            <li> Productos con control legal, como las benzodiazepinas</li>
                            <li> Los productos refrigerados o que necesitan temperaturas especiales de
                                almacenamiento.</li>
                            <li> Productos que se hayan elaborado en Recetario Magistral</li>
                            <li> Productos de belleza como el maquillaje</li>
                            <li> Alimentos de uso inmediato</li>
                            <li> Si los productos fueron abiertos, sus sellos rotos o adulterados, cajas en
                                mal estado, sucias o
                                filtradas, en el entendido que no fue la condición de entrega de los productos.</li>
                            <li> Si compraste más unidades de las que necesitabas.</li>
                            <li> Si piensas que el medicamento que te recetó el médico no hizo el efecto que
                                pensabas.</li>
                        </ol>
                    </div>

                    <p>
                        Una vez que esté seguro de cumplir con lo indicado, comunícate con nosotros a nuestros canales de
                        atención, nuestro mail: contacto@rpfarma.cl , nuestro WhatsApp +56 9 4140 9095 o directamente a
                        nuestro teléfono +56 9 4140 9095. Te solicitaremos el número de pedido y que tengas tu boleta a
                        mano.
                    </p>
                    <h5>3. En el caso de que tu pedido llegue en malas condiciones, como el sello de seguridad roto o los
                        productos deteriorados por el transporte.</h5>
                    <ul>
                        <li>Comunícate con nosotros a nuestros canales de atención, nuestro mail: contacto@rpfarma.cl ,
                            nuestro
                            WhatsApp +56 9 4140 9095 o directamente a nuestro teléfono +56 9 4140 9095. Te solicitaremos el
                            número de pedido y que tengas tu boleta a mano.</li>
                        <li>En un plazo máximo de 72 horas, te repondremos los productos o si lo deseas reembolsaremos el
                            pago
                            de tu compra, por los canales correspondientes.</li>
                    </ul>
                    <h5>4. Si sospechas que sufres de algún efecto adverso por el uso de alguno de los productos que
                        compraste.</h5>
                    <ul>
                        <li>Comunícate de inmediato a nuestro teléfono +56 9 4140 9095, para dar inicio al protocolo
                            sanitario correspondiente a cargo del Director Técnico de nuestra farmacia. Serás atendido por
                            el
                            Químico Farmacéutico que te asesorará en esta contingencia.</li>
                    </ul>
                    <h5>5. Si algún producto que compraste en nuestra página presenta defectos de fabricación, tales como:
                    </h5>
                    <ul>
                        <li>Faltan unidades y el producto estaba sellado, comprimidos de diferentes colores, objetos
                            extraños
                            en el interior, comprimidos fracturados, soluciones con material precipitado u otras que hagan
                            sospechar de una falla de calidad.</li>
                        <li>Comunícate con nosotros a nuestros canales de atención, nuestro mail: contacto@rpfarma.cl ,
                            nuestro WhatsApp +56 9 4140 9095 o directamente a nuestro teléfono +56 9 4140 9095. Te
                            solicitaremos
                            el número de pedido y que tengas tu boleta a mano.</li>
                        <li>Te daremos atención inmediata con el Director Técnico para poder determinar los pasos a seguir
                            en la solución del problema.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
