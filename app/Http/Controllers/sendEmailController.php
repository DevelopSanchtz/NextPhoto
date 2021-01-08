<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $telefono = $request->telefono;
        $correo = $request->correo;
        $mensaje = $request->mensaje;

        $asunto = "Contactanos NEXT PHOTO";

        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('correo', ["nombre" => $nombre]);
        view('correo', ["correo" => $correo]);
        view('correo', ["mensaje" => $mensaje]);


        Mail::send('correo', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('nextphoto2020@gmail.com', 'Contacto NEXT PHOTO');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view('welcome');
    }

    public function paqueteUno(Request $request)
    {
        $nombre     = $request->nombre;
        $telefono   = $request->telefono;
        $cantidad   = $request->cantidad;
        $ubicacion  = $request->ubicacion;
        $fecha_hora = $request->fecha_hora;

        $asunto     = "PAQUETE UNO";
        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('paquetes', ["nombre" => $nombre, "telefono" => $telefono, "cantidad" => $cantidad, "ubicacion" => $ubicacion, "fecha_hora" => $fecha_hora]);

        Mail::send('paquetes', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('nextphoto2020@gmail.com', 'PAQUETE UNO');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view('welcome');
    }

    public function paqueteDos(Request $request)
    {
        $nombre     = $request->nombre;
        $telefono   = $request->telefono;
        $cantidad   = $request->cantidad;
        $ubicacion  = $request->ubicacion;
        $fecha_hora = $request->fecha_hora;

        $asunto     = "PAQUETE DOS";
        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('paquetes', ["nombre" => $nombre, "telefono" => $telefono, "cantidad" => $cantidad, "ubicacion" => $ubicacion, "fecha_hora" => $fecha_hora]);

        Mail::send('paquetes', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('nextphoto2020@gmail.com', 'PAQUETE DOS');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view('welcome');
    }

    public function bodaxv(Request $request)
    {
        $nombre     = $request->nombre;
        $telefono   = $request->telefono;
        $cantidad   = $request->cantidad;
        $ubicacion  = $request->ubicacion;
        $fecha_hora = $request->fecha_hora;

        $asunto     = "PAQUETE BODA Y XV";
        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('paquetes', ["nombre" => $nombre, "telefono" => $telefono, "cantidad" => $cantidad, "ubicacion" => $ubicacion, "fecha_hora" => $fecha_hora]);

        Mail::send('paquetes', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('nextphoto2020@gmail.com', 'PAQUETE BODA Y XV');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view('welcome');
    }

    public function casuales(Request $request)
    {
        $nombre     = $request->nombre;
        $telefono   = $request->telefono;
        $cantidad   = $request->cantidad;
        $ubicacion  = $request->ubicacion;
        $fecha_hora = $request->fecha_hora;

        $asunto     = "PAQUETE CASUAL";
        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('paquetes', ["nombre" => $nombre, "telefono" => $telefono, "cantidad" => $cantidad, "ubicacion" => $ubicacion, "fecha_hora" => $fecha_hora]);

        Mail::send('paquetes', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('nextphoto2020@gmail.com', 'PAQUETE SESIONES CASUALES');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view('welcome');
    }
}