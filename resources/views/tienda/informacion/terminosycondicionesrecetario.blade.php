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
                            Términos y Condiciones de Recetario Magistral
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
                    <h1 class="document__title">Términos y Condiciones de Recetario Magistral</h1>
                </div>
                <div class="document__content typography" style="text-align: justify;">
                    <h5>1. De las características del servicio</h5>
                    <p>
                        <strong>RP FARMA</strong> cuenta con el servicio de Recetario Magistral On Line, en el cual el paciente (usuario
                        registrado), puede cotizar, comprar y dispensar sus recetas magistrales de forma remota.
                        Las condiciones particulares de cada preparado magistral serán objeto de revisión por parte del
                        Director Técnico de Rp Farma al momento de comunicar la intención de cotizar, las cuales quedan
                        reflejadas en este documento.
                    </p>
                    <h5>2. Respecto del uso del servicio</h5>
                    <p>
                        <strong>RP FARMA</strong>, solo podrá aceptar a pacientes o adquirentes mayores de 18 años, que acepten las
                        condiciones del servicio. Toda información entregada por el usuario se entiende fidedigna y correcta
                        para los procesos posteriores a la cotización de la receta magistral.
                        Al aceptar los Términos y Condiciones del sitio www.farmaciasrpfarma.cl se entiende que estas
                        condiciones del servicio podrían tener actualizaciones periódicas.
                    </p>
                    <h5>3. Preparados bajo venta de recetas médica controladas</h5>
                    <p>
                        El paciente debe enviar el archivo de su receta para análisis, revisión y autorización, para poder
                        ser cotizada. Si el preparado contiene algún medicamento que es sujeto de control legal, este
                        documento debe ser visado por la Dirección Técnica.
                        En caso positivo, el paciente o adquiriente debe llevar este documento a la sucursal de Rp Farma que
                        está legalmente habilitada para su dispensación.
                        En caso negativo, el paciente será notificado en su apartado de cliente registrado y las razones de
                        tal determinación.
                    </p>
                    <h5>4. Precio y forma de pago</h5>
                    <p>
                        <strong>RP FARMA</strong>, una vez recepcionada la solicitud de cotización, tendrá un plazo máximo de 48 horas para
                        dar respuesta al paciente, solo en días hábiles, enviará la cotización por el preparado magistral el
                        cual tendrá una validez de una semana.
                        El sitio proveerá el mecanismo de pago electrónico, para cancelar con tarjeta de crédito, débito.
                        Estos medios de pagos podrían variar en la medida de las mejoras tecnológicas de los proveedores de
                        este servicio y siempre estarán sujetas a los contratos entre las entidades financieras y sus
                        clientes.
                    </p>
                    <h5>5. Consentimiento de la compra</h5>
                    <p>
                        <strong>Farmacias Rp Farma</strong>, ofrece el servicio de recetas magistrales indicando los términos y condiciones
                        para que el paciente o adquiriente pueda utilizar nuestros servicios de forma informada. Una vez
                        aceptado el precio de la transacción, con toda la información del proceso, plazos mediante un
                        contacto en su apartado de usuario y/o mail, se acepta el pago del mismo, se procederá a la
                        elaboración de su preparado, del cual no podrá retractarse.
                    </p>
                    <h5>6. Entrega o retiro de los preparados magistrales</h5>
                    <p>
                        <strong>Farmacias Rp Farma</strong>, informará al usuario del tiempo de elaboración y fecha de retiro, la cual no deberá ser
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
                    <h5>7. Retracto legal</h5>
                    <p>
                        Dada la naturaleza del servicio de elaboración de recetas magistrales, no operará el retracto por
                        parte del usuario.
                    </p>
                    <h5>8. Cambio o devoluciones</h5>
                    <p>
                        Si el producto, presentara fallas o defectos de origen, estas serán reembolsados al paciente hasta
                        después de 7 días de efectuado el pago. Si estos daños son atribuibles al mal uso o transporte del
                        paciente esto, no dará derecho a esta garantía.
                    </p>
                    <h5>9. Privacidad</h5>
                    <p>
                        Este servicio, como todos los datos entregados a Rp Farma están sujetos a las políticas de
                        privacidad del sitio.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
