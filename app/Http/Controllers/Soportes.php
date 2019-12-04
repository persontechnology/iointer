<?php

namespace App\Http\Controllers;

use App\DataTables\SoportesDataTable;
use App\Models\Chat;
use App\Models\Soporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Soportes extends Controller
{
    public function __construct()
    {
        $this->middleware(['role_or_permission:Administrador|Accesso a soporte']);
    }

    public function index(SoportesDataTable $dataTable)
    {
        return $dataTable->render('soportes.index');
    }

    public function estado(Request $request)
    {
        $soporte=Soporte::findOrFail($request->soporte);
        $soporte->estado=$request->estado;
        $soporte->save();
        return response()->json(['success'=>'Estado cambiado exitosamente']);
    }

    public function eliminar(Request $request,$idSoporte)
    {
        try {
            $soporte=Soporte::findOrFail($idSoporte);
            $soporte->delete();
            $request->session()->flash('success','Soporte eliminado exitosamente');
        } catch (\Exception $th) {
            $request->session()->flash('info','Soporte no eliminado');
        }
        return redirect()->route('soporte');
    }

    public function chat($idSoporte)
    {
        $soporte=Soporte::findOrFail($idSoporte);
        $data = array('soporte' => $soporte );
        return view('soportes.chat',$data);
    }

    public function guardarChat(Request $request)
    {
        $chat=new Chat();
        $chat->mensaje=$request->mensaje;
        $chat->soporte_id=$request->soporte;
        $chat->user_id=Auth::id();
        $chat->save();
        return response()->json($chat);
    }
}
