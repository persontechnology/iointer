<?php

namespace App\DataTables;

use App\Models\Soporte;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SoportesDataTable extends DataTable
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
            ->editColumn('created_at',function($s){
                return view('soportes.fecha',['s'=>$s])->render();
            })
            ->editColumn('lat',function($s){
                return view('soportes.mapa',['s'=>$s])->render();
            })
            ->editColumn('estado',function($s){
                return view('soportes.estado',['s'=>$s])->render();
            })
            ->addColumn('action', function($s){
                return view('soportes.accion',['s'=>$s])->render();
            })
            ->rawColumns(['created_at','lat','estado','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Soporte $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Soporte $model)
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
                    ->setTableId('soportes-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
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
            Column::make('estado'),      
            Column::make('created_at')->title('Fecha'),
            Column::make('nombres'),
            Column::make('apellidos'),
            Column::make('cedula')->title('Cédula'),
            Column::make('telefono')->title('Teléfono'),
            Column::make('direccion')->title('Dirección'),
            Column::make('lat')->title('Ubicación'),
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Soportes_' . date('YmdHis');
    }
}
