<?php

namespace App\Http\Controllers;

use App\DataTables\FacturasDataTable;
use App\DataTables\UsuariosDataTable;
use App\Models\Factura;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
                ->where('plan_id',$plan->id)->where('fecha',Carbon::now()->toDateString())
                ->first();

                if(!$factura){
                    $factura=new Factura();
                    $factura->user_id=$user_m->id;
                    $factura->plan_id=$plan->id;
                    $factura->fecha=Carbon::now()->toDateString();
                    $factura->valor=$plan->valor;
                    $factura->save();
                }

            }
        }

        
        return $dataTable->render('facturas.index');
    }

    public function nuevo(UsuariosDataTable $dataTable)
    {
        return $dataTable->render('facturas.nuevo');
    }

    public function realizarFactura($idUser)
    {
        $user=User::findOrFail($idUser);
        return $user->planes->pluck('user_plans.dia');
    }
}
