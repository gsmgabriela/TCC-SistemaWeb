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

    <title>Urban Spin - Cadastros </title>
</head>

<h1>Registro de Entregas</h1>

@section('aposMenu')


<body>

    <form class="formBuscaPedido" action = "">
        <label> Número do Pedido/Venda: </label>
        <input class="cep" name="pedido">
        <button class="buscarPedido btn btn-success" type="submit">Buscar</button>
    </form>


<div class="tabelasEntrega">

    <table class="table table-hover posTableNovaEntrega">
        <thead>
        <caption class="tituloTabela">Dados Pessoais - Cliente</caption>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>RG</th>


        </thead>
        {{--@forelse($locais as $linha)--}}
        <tr>

            {{--<td>{{ $linha->id }} </td>--}}
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
            <td colspan="2"> Cliente Não Encontrado. </td>
        </tr>

        {{--@endforelse--}}
    </table>




    <table class="table table-hover posTableNovaEntrega">
        <thead>
        <caption class="tituloTabela">Contatos - Cliente</caption>
        <th>Telefone1</th>
        <th>Telefone2</th>
        <th>E-mail</th>


        </thead>
        {{--@forelse($locais as $linha)--}}
        <tr>

            {{--<td>{{ $linha->id }} </td>--}}
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
            <td colspan="2"> Contato não Encontrado. </td>
        </tr>

        {{--@endforelse--}}
    </table>




    <table class="table table-hover posTableNovaEntrega">
        <thead>
        <caption class="tituloTabela">Endereço de Entrega</caption>
        <th>CEP</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Alterar</th>


        </thead>
        {{--@forelse($locais as $linha)--}}
        <tr>

            {{--<td>{{ $linha->id }} </td>--}}
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
            <td colspan="2"> Endereço Não Enconrado. </td>
        </tr>

        {{--@endforelse--}}
    </table>



    {{--Submeter o Formulário abaixo para tabela Entregas--}}
    <form class="formNovaEntrega" action = "">

        <label> Previsão: </label>
        <input type="date" class="cep" name="previsao">

        <select class="cep" name="status">
            <option>Selecione Entregador</option>
        </select>

        <select class="cep" name="status">
            <option>Selecione o Status da Entrega</option>
            <option>Entregue</option>
            <option>Pendente</option>
        </select><br>

        <input hidden class="cep" name="pedido">
        <input hidden type="text" class="cep" name="idCliente">
        <input hidden type="text" class="cep" name="idCliente">

        <button class="buscarCep btn btn-success" type="submit">Registrar</button>
    </form>

</div>

    @endsection

    </body>


</html>

