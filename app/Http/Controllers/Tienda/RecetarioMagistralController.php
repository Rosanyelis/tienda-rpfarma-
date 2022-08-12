<?php

namespace App\Http\Controllers\Tienda;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\RegistroCotizacion;
use App\Models\User;
use App\Models\UserReclamo;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class RecetarioMagistralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritoItems = \Cart::getContent();
        return view('tienda.recetario-magistral.cotizar', compact('carritoItems'));
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
        $request->validate([
            'nombre' => ['required'],
            'apellido' => ['required'],
            'rut' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required', 'numeric'],
            'email' => ['required'],
            'mensaje' => ['required'],
            'imagen' => ['required'],
            'domicilio' => ['required'],
            'terminos' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido.required' => 'El campo Apellido es obligatorio',
            'rut.required' => 'El campo Rut es obligatorio',
            'direccion.required' => 'El campo Direccion es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'telefono.required' => 'El campo Teléfono es obligatorio',
            'telefono.numeric' => 'El campo Teléfono debe ser sólo números, sin símbolos',
            'mensaje.required' => 'El campo Mensaje es obligatorio',
            'imagen.required' => 'El campo Receta es obligatorio',
            'domicilio.required' => 'El campo Domicilio es obligatorio',
            'terminos.required' => 'Debe seleccionar haber leido los términos y condiciones de Recetario  Magistral',
        ]);

        # Validar que usuario existe
        $user = User::where('email', $request->email)->count();
        if ($user>0) {
            $dataUsuario = \App\Models\User::where('email', $request->email)->first();

            $date = Carbon::now();
            # Registar cotizacion
            $name = $dataUsuario->cliente->nombre.' '.$dataUsuario->cliente->apellido;
            $registro = new RegistroCotizacion();
            $registro->user_id = $dataUsuario->id;
            $registro->adquiriente = $request->adquiriente;
            $registro->mayor_edad = $request->mayorEdad;
            $registro->terminos = $request->terminos;
            $registro->domicilio = $request->domicilio;
            $registro->mail = $dataUsuario->email;
            $registro->nombre = $name;
            $registro->telefono = $request->telefono;
            $registro->mensaje = $request->mensaje;
            if ($request->file('imagen')) {
                $uploadPath = public_path('/storage/RecetasACotizar/');
                $file = $request->file('imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/RecetasACotizar/'.$fileName;
                $registro->imagen = $url;
            }
            $registro->direccion = $request->direccion;
            if ($request->direccione) {
                $registro->direcciondespacho = $request->direccione;
            }
            $registro->precio = 0;
            $registro->estado = 'Ingresado';
            $registro->fecha_creacion = $date;
            $registro->save();

            $dato = new UserReclamo();
            $dato->solicitud_id = $registro->id_registro;
            $dato->cliente_id = $dataUsuario->cliente->id;
            $dato->mensaje = $request->mensaje;
            $dato->save();

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
            //     $mail->addAddress($dataUsuario->email);

            //     $mail->Subject = 'Cotizador De Recetas Medicas';

            //     $mensaje = 'Hola Sr(a) '.$name.':<br /><br />Tu receta magistral ha sido registrada con éxito y a la brevedad nos pondremos en contacto.<br/><br/>
            //     Para hacer seguimiento y revisar tu solicitud haz click en el siguiente enlace e inicia sesión: <br /><br/>http://proyecto-en-desarrollo.farmaciasrpfarma.cl/';

            //     $mail->Body    = $mensaje;
            //     $mail->addAttachment($registro->imagen, 'ImagenReceta');

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


        }else{
            $name = $request->nombre.' '.$request->apellido;
            $rol = \App\Models\Rol::where('name', 'Cliente')->first();
            $user = User::create([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol_id' => $rol->id,
                'estatus' => 'Activo',
            ]);

            $record = new Cliente();
            $record->user_id = $user->id;
            $record->nombre = $request->nombre;
            $record->apellido = $request->apellido;
            $record->rut = $request->rut;
            $record->direccion = $request->direccion;
            $record->telefono = $request->telefono;
            $record->save();

            $date = Carbon::now();
            # Registar cotizacion
            $registro = new RegistroCotizacion();
            $registro->user_id = $user->id;
            $registro->adquiriente = $request->adquiriente;
            $registro->mayor_edad = $request->mayorEdad;
            $registro->terminos = $request->terminos;
            $registro->domicilio = $request->domicilio;
            $registro->mail = $request->email;
            $registro->nombre = $name;
            $registro->telefono = $request->telefono;
            $registro->mensaje = $request->mensaje;
            if ($request->file('imagen')) {
                $uploadPath = public_path('/storage/RecetasACotizar/');
                $file = $request->file('imagen');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $file->move($uploadPath, $fileName);
                $url = '/storage/RecetasACotizar/'.$fileName;
                $registro->imagen = $url;
            }
            $registro->direccion = $request->direccion;
            if ($request->direccione) {
                $registro->direcciondespacho = $request->direccione;
            }
            $registro->precio = 0;
            $registro->estado = 'Ingresado';
            $registro->fecha_creacion = $date;
            $registro->save();

            $dato = new UserReclamo();
            $dato->solicitud_id = $registro->id_registro;
            $dato->cliente_id = $record->id;
            $dato->mensaje = $request->mensaje;
            $dato->save();

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
            //     $mail->addAddress($request->email);

            //     $mail->Subject = 'Cotizador De Recetas Medicas';

            //     $mensaje = 'Hola Sr(a) '.$name.':<br /><br />Tu receta magistral ha sido registrada con éxito y a la brevedad nos pondremos en contacto.<br/><br/>
            //     Sus datos de acceso para su perfil son los siguientes: <br /><br />
            //     Correo: '.$request->email.'<br /><br />
            //     Contraseña: '.$request->password.'<br /><br />
            //     Para hacer seguimiento y revisar tu solicitud haz click en el siguiente enlace e inicia sesión: <br /><br/>http://proyecto-en-desarrollo.farmaciasrpfarma.cl/';

            //     $mail->Body    = $mensaje;
            //     $mail->addAttachment($registro->imagen, 'ImagenReceta');

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

            event(new Registered($user));

            Auth::login($user);
        }

        return redirect('/recetario-magistral')->with('success', 'Receta Enviada Exitosamente!');
    }




}
