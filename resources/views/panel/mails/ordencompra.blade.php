<!DOCTYPE html>
<html
    style="font-family: sans-serif; line-height: 1.15; -webkit-text-size-adjust: 100%; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body
    style="margin: 0; font-family: 'DM Sans', sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif; font-size: 0.875rem; font-weight: 400; line-height: 1.65; color: #526484; text-align: left; background-color: #f5f6fa;">
    <table
        style="background: #f5f6fa; font-size: 14px; line-height: 22px; font-weight: 400; color: #8094ae; width: 100%;">
        <tbody>
            <tr>
                <td style="padding-top: 2.75rem !important;">
                    <table style="width: 100%; max-width: 620px; margin: 0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:10px;">
                                    <div style="color: #854fff; word-break: break-all;">
                                        <img style="height: 60px;" src="{{ asset('images/logo-RpFARMA.png') }}">
                                    </div>
                                    <p style="font-size: 13px; color: #854fff; padding-top: 12px;"></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table
                        style="width: 96%; max-width: 620px; margin: 0 auto; background: #ffffff; text-align:center;">
                        <tbody>
                            <tr>
                                <td
                                    style="padding-right: 1rem !important;padding-right: 2.75rem !important;padding-top: 1rem !important;padding-top: 2.75rem !important;padding-bottom: 1.5rem !important;">
                                    <img style="width: 100px !important;"
                                        src="{{ asset('images/email/kyc-success.png') }}" alt="Verified">
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="padding-right: 1rem !important;padding-right: 2.75rem !important;padding-bottom: 1rem !important;padding-bottom: 2.75rem !important;">
                                    <h4 style="color: #1ee0ac !important; margin-bottom: 1rem !important;">Tu Compra
                                        Verificada con Exito!.</h4>
                                    <p>Estimado cliente <b>{{ $orden->cliente->nombre }}
                                            {{ $orden->cliente->apellido }}</b>, su compra fué aprobada con éxito.<br>
                                        Recibirá una llamada o un correo a los datos de contacto que proporcionó para la
                                        recepción de la orden; en caso de haber elegido retiro en local, por favor dirijase al local elegido.</p>
                                    <p>Gracias por su compra.</p>
                                    <p>Le deseamos felíz día.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 100%; max-width: 620px; margin: 0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-top: 1.5rem !important;">
                                    <p style="font-size: 13px;">Copyright © 2020 RpFarma. Todos los Derechos
                                        Reservados.</p>

                                    <p style="ont-size: 12px;padding-top: 1.5rem !important;">Si posee un problema con
                                        su compra, notifiquenos por el
                                        formulario de contacto de la tienda.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
