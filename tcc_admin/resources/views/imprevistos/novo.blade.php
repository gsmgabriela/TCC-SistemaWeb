<?php
/**
 * Created by PhpStorm.
 * User: gabrielasoares
 * Date: 21/08/2017
 * Time: 12:35
 */
?>
@extends('principal.menu')

        <!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/opcoesInf.css" rel="stylesheet">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    <title>Urban Spin - Entregas </title>
</head>

<h1>Registro de Imprevistos</h1>

@section('aposMenu')

    <body>


        <table class="table table-hover posTableNovaEntrega">
            <thead>
            <caption class="tituloTabela">Entrega Relacionada</caption>

            <th>ID</th>
            <th>Pedido</th>
            <th>Previsão</th>
            <th>Status</th>
            <th>Entregador</th>
            <th>Cliente</th>


            </thead>
            {{--@forelse($locais as $linha)--}}
            <tr>

                {{--<td>{{ $linha->id }} </td>--}}
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                {{--@forelse($todPred as $predio)--}}
                {{--@if($predio -> id ==$linha->predio_id)--}}
                {{--<td>{{$predio-> nome}}</td>--}}
                {{--@endif--}}
                {{--@empty--}}
                {{--@endforelse--}}

            </tr>

            {{--@empty--}}
            <tr>
                <td colspan="2"> Entrega Não Encontrada. </td>
            </tr>

            {{--@endforelse--}}
        </table>


    <form class="formImprevisto" action = "">

       <label> Descrição: </label> <br>
       <textarea></textarea>

        <button class="buscarCep btn btn-success" type="submit">Registrar</button>
    </form>


    @endsection

    </body>


</html>

