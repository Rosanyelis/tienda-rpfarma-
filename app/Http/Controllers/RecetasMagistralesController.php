<?php

namespace App\Http\Controllers;

use App\Models\RegistroCotizacion;
use App\Models\UserReclamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class RecetasMagistralesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RegistroCotizacion::all();
        return view('panel.recetas-magistrales.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RegistroCotizacion::where('id_registro', $id)->first();
        $conversacion = UserReclamo::where('solicitud_id', $id)->orderBy('created_at', 'desc')->get();
        return view('panel.recetas-magistrales.responder', compact('data', 'conversacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'precio_receta' => ['required'],
            'precio_despacho' => ['required'],
            'precio_total' => ['required'],
            'tiempo_despacho' => ['required'],
            'respuesta' => ['required'],
        ],
        [
            'respuesta.required' => 'El campo Mensaje de Respuesta es obligatorio',
        ]);

        if ($request->precio_total) {
            $dato = RegistroCotizacion::where('id_registro', $id)->first();
            $dato->precio = $request->precio_total;
            $dato->precio_despacho = $request->precio_despacho;
            $dato->precio_base = $request->precio_receta;
            $dato->tiempo_despacho = $request->tiempo_despacho;
            $dato->estado = 'Cotizado';
            $dato->save();
        }


        $registro = new UserReclamo();
        $registro->solicitud_id = $id;
        $registro->user_id = Auth::user()->id;
        $registro->mensaje = $request->respuesta;
        $registro->save();

        // $data = RegistroCotizacion::where('id_registro', $id)->first();
        // $correoreceptor = $data->mail;
        // $nombreReceptor = $data->nombre;
        # Envío de correo
        // require base_path("vendor/autoload.php");
        // $mail = new PHPMailer(true);

        // try {
        //     // Email server settings
        //     $mail->SMTPDebug = 0;
        //     $mail->isSMTP();
        //     $mail->Host = 'mail.farmaciasrpfarma.cl';             //  smtp host
        //     $mail->SMTPAuth = true;
        //     $mail->Username = 'soporte@farmaciasrpfarma.cl';   //  sender username
        //     $mail->Password = 'kaAD(yE,gynE';       // sender password
        //     $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
        //     $mail->Port = 465;

        //     $mail->setFrom('soporte@farmaciasrpfarma.cl', 'Soporte');
        //     $mail->addAddress('soporte@farmaciasrpfarma.cl');
        //     $mail->addAddress($correoreceptor);

        //     $mail->Subject = 'Cotizador De Recetas Medicas';

        //     $mensaje = "Hola Sr(a). ".$nombreReceptor.":<br /><br />".$request->respuesta."<br /><br />
        //     Para hacer seguimiento y revisar tu solicitud haz click en el siguiente enlace: <br /><br />
        //     http://proyecto-en-desarrollo.farmaciasrpfarma.cl/";

        //     $mail->Body    = $mensaje;

        //     $mail->send();

        //     // $mail->AltBody = plain text version of email body;
        //     // if( !$mail->send() ) {
        //     //     return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
        //     // }
        //     // else {
        //     //     return back()->with("success", "Email has been sent.");
        //     // }

        // } catch (Exception $e) {
        //     // return back()->with('error','Message could not be sent.');
        // }

        return redirect('/admin/recetas-magistrales')->with('success', 'Respuesta Enviada Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
