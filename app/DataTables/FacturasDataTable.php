<?php

namespace App\DataTables;

use App\Models\Factura;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FacturasDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('user_id',function($fa){
                return view('facturas.user',['fa'=>$fa])->render();
            })
            ->editColumn('plan_id',function($fa){
                return $fa->plan->nombre;
            })
            ->editColumn('estado',function($fa){
                return view('facturas.estado',['fa'=>$fa])->render();
            })
            ->filterColumn('user_id',function($query, $keyword){
                $query->whereHas('user', function($query) use ($keyword) {
                    $query->whereRaw("cedula like ?", ["%{$keyword}%"]);
                });            
            })
            ->filterColumn('dia',function($query, $keyword){
                $query->whereHas('user', function($query) use ($keyword) {
                    $query->whereRaw("concat(nombres,' ',apellidos) like ?", ["%{$keyword}%"]);
                });            
            })
            ->filterColumn('valor',function($query, $keyword){
                $query->whereHas('user', function($query) use ($keyword) {
                    $query->whereRaw("email like ?", ["%{$keyword}%"]);
                });            
            })
            ->filterColumn('plan_id',function($query, $keyword){
                $query->whereHas('plan', function($query) use ($keyword) {
                    $query->whereRaw("nombre like ?", ["%{$keyword}%"]);
                });            
            })

            ->addColumn('action', function($fa){
                return view('facturas.accion',['fa'=>$fa])->render();
            })->rawColumns(['action','user_id','estado']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Factura $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Factura $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('facturas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->title('Acción')
                  ->addClass('text-center'),
            Column::make('numero')->title('# factura'),
            Column::make('user_id')->title('Cliente'),
            Column::make('plan_id')->title('Plan'),
            Column::make('valor'),
            Column::make('estado'),
            Column::make('fecha')->title('Generado el'),
            Column::make('dia')->title('Día de pago'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Facturas_' . date('YmdHis');
    }
}
