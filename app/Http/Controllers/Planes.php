<?php

namespace App\Http\Controllers;

use App\DataTables\PlanesDataTable;
use App\Models\Plan;
use Illuminate\Http\Request;

class Planes extends Controller
{
    public function __construct()
    {
        $this->middleware(['role_or_permission:Administrador|Accesso a planes']);
    }

    public function index(PlanesDataTable $dataTable)
    {
        return $dataTable->render('planes.index');
    }

    public function nuevo()
    {
        return view('planes.nuevo');
    }

    public function guardar(Request $request)
    {
        $rg_decimal="/^[0-9,]+(\.\d{0,2})?$/";
        $request->validate([
            'nombre' => 'required|unique:plans|max:255',
            'valor' => 'required|regex:'.$rg_decimal,
            'descripcion'=>'nullable|max:255|string'
        ]);

        $plan=new Plan();
        $plan->nombre=$request->nombre;
        $plan->valor=$request->valor;
        $plan->descripcion=$request->descripcion;
        $plan->save();
        $request->session()->flash('success','Nuevo plan ingresado exitosamente');
        return redirect()->route('planes');

    }

    public function eliminar(Request $request,$idPlan)
    {
        try {
            $plan=Plan::findOrFail($idPlan);
            $plan->delete();
            $request->session()->flash('success','Plan eliminado exitosamente');
        } catch (\Exception $th) {
            $request->session()->flash('info','Plan no eliminado');
        }
        return redirect()->route('planes');
    }

    public function editar($idPlan)
    {
        $plan=Plan::findOrFail($idPlan);
        $data = array('p' => $plan );
        return view('planes.editar',$data);
    }

    public function actualizar(Request $request)
    {
        $rg_decimal="/^[0-9,]+(\.\d{0,2})?$/";
        $request->validate([
            'nombre' => 'required|max:255|unique:plans,nombre,'.$request->plan,
            'valor' => 'required|regex:'.$rg_decimal,
            'descripcion'=>'nullable|max:255|string'
        ]);

        $plan=Plan::findOrFail($request->plan);
        $plan->nombre=$request->nombre;
        $plan->valor=$request->valor;
        $plan->descripcion=$request->descripcion;
        $plan->save();
        $request->session()->flash('success','Plan actualizado exitosamente');
        return redirect()->route('planes');

    }
}
