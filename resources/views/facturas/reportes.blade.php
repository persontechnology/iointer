@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('reportes'))

@section('content')
<div class="container-fluid mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <form action="{{ route('reportes') }}" method="GET">
                <label for="">Ingrese fecha inicial y fecha final.</label>    
                <div class="input-group mb-3">
                    <input type="date" class="form-control" name="fi" placeholder="Ingrese.." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('fi',$fi) }}">
                    <input type="date" class="form-control" name="ff" placeholder="Ingrese.." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('ff',$ff) }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-header">
                    Facturas
                </div>

                <div class="card-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('linksCabeza')
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    
@endpush
@prepend('linksPie')
    <script>
    $('#menuFactura').addClass('active');  

    Highcharts.setOptions({
        lang: {
            loading: 'Cargando...',
            months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            exportButtonTitle: "Exportar",
            printButtonTitle: "Importar",
            rangeSelectorFrom: "Desde",
            rangeSelectorTo: "Hasta",
            rangeSelectorZoom: "Período",
            downloadPNG: 'Descargar imagen PNG',
            downloadJPEG: 'Descargar imagen JPEG',
            downloadPDF: 'Descargar imagen PDF',
            downloadSVG: 'Descargar imagen SVG',
            printChart: 'Imprimir',
            resetZoom: 'Reiniciar zoom',
            resetZoomTitle: 'Reiniciar zoom',
            thousandsSep: ",",
            decimalPoint: '.',
            drillUpText:'<-- Atras',
            viewFullscreen:'Ver pantalla completa',
            downloadCSV:'Descargar CSV',
            downloadXLS:'Descargar XLS',
            viewData:'Ver tabla de datos',
            openInCloud:'Editar en Highcharts Cloud'
        }
    });

    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'FACTURAS DESDE {{ $fi??'' }} HASTA {{ $ff??'' }}'
        },
        subtitle: {
            text: 'TOTAL DE FACTURAS'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
        title: {
            text: 'Total de dinero'
        }
    
        },
        legend: {
            enabled: false
        },
        plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
            enabled: true,
            format: '$ {point.y}'
            }
        }
        },
    
        tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b> $ {point.y}</b><br/>'
        },
    
        series: [
            {
                name: "Total",
                colorByPoint: true,
                data: [
                    {
                        name: "CREADO",
                        y: {{ $f_creados->sum('valor') }},
                        drilldown: "CREADO"
                    },
                    {
                        name: "ENTREGADO",
                        y: {{ $f_entregado->sum('valor') }},
                        drilldown: "ENTREGADO"
                    },
                    {
                        name: "ANULADO",
                        y: {{ $f_anulado->sum('valor') }},
                        drilldown: "ANULADO"
                    }
                ]
            }
        ],
        drilldown: {
            series: [
              {
                name: "CREADO",
                id: "CREADO",
                data: [
                    @foreach ($f_creados as $f_creado)
                        [
                            "{{ $f_creado->fecha }}, {{ $f_creado->user->nombres.' '.$f_creado->user->apellidos }}",
                            {{ $f_creado->valor }}
                        ],    
                    @endforeach
                ]
              },
              {
                name: "ENTREGADO",
                id: "ENTREGADO",
                data: [
                    @foreach ($f_entregado as $f_entre)
                        [
                            "{{ $f_entre->fecha }}, {{ $f_entre->user->nombres.' '.$f_entre->user->apellidos }}",
                            {{ $f_entre->valor }}
                        ],    
                    @endforeach
                ]
              },
              {
                name: "ANULADO",
                id: "ANULADO",
                data: [
                    @foreach ($f_anulado as $f_anu)
                        [
                            "{{ $f_anu->fecha }}, {{ $f_anu->user->nombres.' '.$f_anu->user->apellidos }}",
                            {{ $f_anu->valor }}
                        ],    
                    @endforeach
                ]
              }
            ]
          }
    });
    
    </script>
    
@endprepend

@endsection
