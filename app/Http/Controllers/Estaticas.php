<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Soporte;
use App\Notifications\EnviarContactoNoty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

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


    public function soporteEnLinea()
    {
        return view('estaticas.soporteEnLinea');
    }

    public function crearSoporte(Request  $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula'=>'required|ecuador:ci',
            'telefono'=>'required|max:20|string',
            'email'=>'required|string|email|max:255',
            'direccion'=>'required|string|max:255',
            'lat'=>'required',
            'lng'=>'required',
        ]);


        $soporte=new Soporte();
        $soporte->nombres=$request->nombres;
        $soporte->apellidos=$request->apellidos;
        $soporte->cedula=$request->cedula;
        $soporte->telefono=$request->telefono;
        $soporte->email=$request->email;
        $soporte->direccion=$request->direccion;
        $soporte->lat=$request->lat;
        $soporte->lng=$request->lng;
        $soporte->save();
        $idEncryp = Crypt::encryptString($soporte->id);
        return redirect()->route('solucionSoporte',$idEncryp);
    }

    public function solucionSoporte($idSoporteEncryp)
    {
        try {
            $idSoporteDecrypt = Crypt::decryptString($idSoporteEncryp);
            $soporte=Soporte::findOrFail($idSoporteDecrypt);
            $data = array('soporte' => $soporte );
            return view('estaticas.solucionSoporte',$data);
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    public function cargarChat($idSoporte)
    {
        $soporte=Soporte::findOrFail($idSoporte);
        $data = array('soporte'=>$soporte,'chats' => $soporte->chats()->orderBy('created_at','desc')->get() );
        return view('estaticas.chatSoporte',$data);
    }

    public function guardaChatCliente(Request $request)
    {
        $chat=new Chat();
        $chat->mensaje=$request->mensaje;
        $chat->soporte_id=$request->soporte;
        $chat->save();
        return response()->json($chat);
    }
}
