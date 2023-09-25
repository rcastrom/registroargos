@extends('layouts.app')

@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tecnológico');
            data.addColumn('number','Inscritos');
            data.addRows([
                ['Ensenada',{{$conteo_ensenada}}],
                ['Mexicali', {{$conteo_mexicali}}],
                ['Mulege', {{$conteo_mulege}}],
                ['Tijuana',{{$conteo_tijuana}}],
                ['Otros',{{$conteo_otro}}]
            ]);
            var options = {
                'title':'Estudiantes pagados',
                'width':500,
                'height':300
            };
            var chart = new google.visualization.BarChart(document.getElementById('barchart_material'));
            chart.draw(data, options);
        }
    </script>
@endsection

@section('content')
    <div class="container-fluid p-5">
        <div id="barchart_material" style="width: 100%; height: 500px;"></div>
        <p>Total: {{$conteo_ensenada + $conteo_mexicali + $conteo_mulege + $conteo_tijuana + $conteo_otro}}</p>
    </div>

@endsection


