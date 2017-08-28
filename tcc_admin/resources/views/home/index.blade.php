@extends('principal.menu')

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/opcoesInf.css" rel="stylesheet">


    <title>Busca Geral - </title>
</head>
<h1>Home</h1>

@section('aposMenu')
<body>
<form action = "{{route('correios.store')}}" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <input class="cep" name="cep">
    <button class="buscarCep btn btn-primary" type="submit">Buscar</button>
</form>
@endsection


</body>
</html>

