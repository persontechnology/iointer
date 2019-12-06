<?php

namespace App\Http\Controllers;

use App\DataTables\FacturasDataTable;
use App\DataTables\UsuariosDataTable;
use App\Models\Factura;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
class Facturas extends Controller
{
    public function __construct()
    {
        $this->middleware(['role_or_permission:Administrador|Acceso a facturas']);
    }

    public function index(FacturasDataTable $dataTable)
    {
        $users=User::has('planes')->get()->pluck('id');
        foreach ($users as $user) {
            $user_m=User::find($user);
            foreach ($user_m->planes as $plan) {
                
                $factura=Factura::where('user_id',$user_m->id)
                ->where('plan_id',$plan->id)->whereMonth('fecha',Carbon::now()->month)
                ->first();

                if(!$factura){
                    $factura=new Factura();
                    $factura->user_id=$user_m->id;
                    $factura->plan_id=$plan->id;
                    $factura->fecha=Carbon::now();
                    $factura->valor=$plan->valor;
                    $factura->dia=$plan->user_plans->dia??0;
                    $factura->save();
                }

            }
        }

        
        return $dataTable->render('facturas.index');
    }

    public function detalle($idFactura)
    {
        $factura=Factura::findOrFail($idFactura);
        $data = array('factura' => $factura );
        return view('facturas.detalle',$data);
    }

    public function realizarFactura($idFactura)
    {
        $factura=Factura::findOrFail($idFactura);
        $data = array('factura' => $factura );
        $pdf = PDF::loadView('facturas.pdf', $data);
        return $pdf->inline('factura.pdf');
    }

    public function generar(Request $request)
    {
        $factura=Factura::findOrFail($request->factura);
        $factura->numero=$request->numero;
        $factura->estado='Entregado';
        $factura->save();
        $request->session()->flash('success','Factura '.$factura->numero.' generado exitosamente');
        return redirect()->route('facturaDetalle',$factura->id);
    }

    public function anular(Request $request, $idFactura)
    {
        $factura=Factura::findOrFail($idFactura);
        $factura->estado='Anulado';
        $factura->save();
        $request->session()->flash('info','Factura '.$factura->numero.' anulado exitosamente');
        return redirect()->route('facturaDetalle',$factura->id);
    }

    public function reportes(Request $request)
    {
        $fi=$request->fi;
        $ff=$request->ff;
        $f_creados=Factura::whereBetween('fecha',[$fi,$ff])->where('estado','Creado')->get();
        $f_entregado=Factura::whereBetween('fecha',[$fi,$ff])->where('estado','Entregado')->get();
        $f_anulado=Factura::whereBetween('fecha',[$fi,$ff])->where('estado','Anulado')->get();
        
        $data = array(
            'f_creados' => $f_creados,
            'f_entregado'=>$f_entregado,
            'f_anulado'=>$f_anulado ,
            'fi'=>$fi,
            'ff'=>$ff
        );

        return view('facturas.reportes',$data);
    }
}
