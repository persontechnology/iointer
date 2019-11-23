<?php

namespace App\Http\Controllers;

use App\Notifications\EnviarContactoNoty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class Estaticas extends Controller
{
    public function nosotros()
    {
        return view('estaticas.nosotros');
    }

    public function equipo()
    {
        return view('estaticas.equipo');
    }

    public function servicios()
    {
        return view('estaticas.servicios');
    }

    public function precios()
    {
        return view('estaticas.precios');
    }

    public function preguntas()
    {
        return view('estaticas.preguntasFrecuantes');
    }
    public function contacto()
    {
        return view('estaticas.contacto');
    }


    public function contactoEnviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255|string',
            'email' => 'required|email|string|max:255',
            'tema' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string|max:255',
        ]);

         Notification::route('mail', env('MAIL_USERNAME', 'david.criollo14@gmail.com'))
            ->notify(new EnviarContactoNoty($request));

        return response()->json(['success'=>'Mensaje enviado exitosamente']);


    }
}
