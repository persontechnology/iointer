<?php

namespace App\Http\Controllers;

use App\DataTables\ClientesDataTable;
use App\Models\Plan;
use App\Models\UserPlan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Clientes extends Controller
{
    public function __construct()
    {
        $this->middleware(['role_or_permission:Administrador|Accesso a planes']);
    }

    public function index(ClientesDataTable $dataTable)
    {
        return $dataTable->render('clientes.index');
    }

    public function nuevo()
    {
        $planes=Plan::all();
        $data = array('planes' => $planes );
        return view('clientes.nuevo',$data);
    }

    public function guardar(Request $request)
    {

        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula'=>'required|ecuador:ci',
            'telefono'=>'nullable|max:20|string',
            'email'=>'nullable|string|unique:users,email|max:255',
            'direccion'=>'required|string|max:255',
            'planes'    => 'nullable|array',
            'planes.*'  => 'nullable|exists:plans,id',
        ]);

        try {
            $user=new User();
            $user->nombres=$request->nombres;
            $user->apellidos=$request->apellidos;
            $user->cedula=$request->cedula;
            $user->telefono=$request->telefono;
            $user->email=$request->email;
            $user->direccion=$request->direccion;
            $user->lat=$request->lat??0;
            $user->lng=$request->lng??0;
            $user->save();
            $user->assignRole('Cliente');
            $user->planes()->sync($request->planes);
            $request->session()->flash('success','Nuevo cliente ingresado exitosamente');
        } catch (\Exception $th) {

            $request->session()->flash('info','Nuevo cliente no ingresado '.$th->getMessage());

        }

        return redirect()->route('clientes');
    }

    public function eliminar(Request $request, $idCliente)
    {
        try {
            DB::beginTransaction();
            $user=User::findOrFail($idCliente);
            $this->authorize('eliminarCliente',$user);
            $user->delete();
            DB::commit();
            $request->session()->flash('success','Cliente eliminado exitosamente');
        } catch (\Exception $th) {
            DB::rollback();
            $request->session()->flash('info','Cliente no eliminado');
        }
        return redirect()->route('clientes');
    }

    public function editar($idCliente)
    {
        $planes=Plan::all();
        $cliente=User::findOrFail($idCliente);
        $this->authorize('editarCliente',$cliente);
        $data = array('planes' => $planes,'c'=>$cliente );
        return view('clientes.editar',$data);
    }

    public function actualizar(Request $request)
    {
        $request->validate([
            'cliente'=>'required|exists:users,id',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cedula'=>'required|ecuador:ci|unique:users,cedula,'.$request->cliente,
            'telefono'=>'nullable|max:20|string',
            'email'=>'nullable|string|max:255|unique:users,email,'.$request->cliente,
            'direccion'=>'required|string|max:255',
            'planes'    => 'nullable|array',
            'planes.*'  => 'nullable|exists:plans,id',
        ]);

        $user=User::findOrFail($request->cliente);
        $this->authorize('editarCliente',$user);
         try {

            $user->nombres=$request->nombres;
            $user->apellidos=$request->apellidos;
            $user->cedula=$request->cedula;
            $user->telefono=$request->telefono;
            $user->email=$request->email;
            $user->direccion=$request->direccion;
            $user->lat=$request->lat;
            $user->lng=$request->lng;
            $user->save();
            $user->planes()->sync($request->planes);
            $request->session()->flash('success','Nuevo cliente actualizado exitosamente');
        } catch (\Exception $th) {
            $request->session()->flash('info','Cliente no actualizado');
        }

        return redirect()->route('clientes');
    }


    public function editarCalendarioPagos($idCliente)
    {
        $user=User::findOrFail($idCliente);
        $data = array('user' => $user );
        return view('clientes.editarCalendarioPagos',$data);
    }

    public function actualizarDiasPago(Request $request)
    {
        $rg_decimal="/^[0-9,]+(\.\d{0,2})?$/";
        $request->validate([
            'cliente'=>'required|exists:users,id',
            'user_plans'    => 'nullable|array',
            'user_plans.*'  => 'nullable|exists:user_plans,id',
            'dias'    => 'nullable|array',
            'dias.*'  => 'nullable|integer|min:1|max:31|regex:'.$rg_decimal,
        ]);

        foreach ($request->user_plans as $up) {
            $u_p=UserPlan::findOrFail($up);
            $u_p->dia=$request->dias[$up];
            $u_p->save();
        }

        $request->session()->flash('success','Días de pago actualizado');
        return redirect()->route('clientes');
    }
}
