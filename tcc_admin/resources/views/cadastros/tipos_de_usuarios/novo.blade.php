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

<h1>Cadastrar Tipos de Usuários</h1>

@section('aposMenu')

    <body>


    <form class="formCadastros" action = "">
        <label> Tipo de Usuário: </label> <br>
        <input class="cep" name="tipo"><br>
        <textarea class="cep" name="tipo"></textarea><br>
        <button class="buscarCep btn btn-success" type="submit">Salvar</button>
    </form>



    @endsection

    </body>


</html>

