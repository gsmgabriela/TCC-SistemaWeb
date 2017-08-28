@extends('principal.menu')

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/dadosCorreios.css" rel="stylesheet">
    <link href="/css/opcoesInf.css" rel="stylesheet">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />


    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOSZe8pDv-gw1ZoF4kQ5-WY5IYbfuIflE" >
    </script>

    <title>Busca Geral - </title>
</head>

<h1>Resultado - Busca por CEP</h1>

<?php
foreach( $result as $ev ):
    $bairro = $ev -> bairro;
    $cep = $ev -> cep;
    $uf = $ev -> uf;
    $cidade = $ev -> cidade;
    $complemento = $ev -> complemento;
    $complemento2 = $ev -> complemento2;
    $endereco = $ev -> end;
endforeach;

$cbairro = str_replace(" ","",$bairro);
$cendereco = str_replace(" ","",$endereco);

$address= "($cep),brasil";

$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

$output= json_decode($geocode);

$lat = $output->results[0]->geometry->location->lat;
$lng = $output->results[0]->geometry->location->lng;



?>

<script type="text/javascript">

    function initialize() {
        var latlng = new google.maps.LatLng('<?php echo $lat ?>','<?php echo $lng ?>');
        var mapOptions = {
            center:latlng,
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: 'Destino',
            draggable: true
        });


    }
</script>

@section('aposMenu')

<body onload="initialize()">

<form action = "{{route('correios.store')}}" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <input class="cep" name="cep">
    <button class="buscarCep btn btn-primary" type="submit">Buscar</button>
</form>


    <div id="map_canvas" style="margin-left: 25%; width:50%; height:50%"></div>

        <table class="table table-hover posTable">
            <thead>

            <th><?php echo $bairro ?> </th>
            <th><?php echo $cidade ?> / <?php echo $uf ?></th>

            </thead>
                <tr>
                    <td> <?php echo $endereco ?></td>
                    <td> <?php echo $lat ?></td>
                    <td> <?php echo $lng ?></td>
                </tr>
        </table>

    {{--<div>--}}
        {{--<a class="assoc btn-xs btn-info" href="{{route('correios.index')}}">Associar</a>--}}
        {{--<a class="novab btn-xs btn-info" href="{{route('correios.index')}}">Nova Busca</a>--}}
    {{--</div>--}}

@endsection

</body>


</html>

