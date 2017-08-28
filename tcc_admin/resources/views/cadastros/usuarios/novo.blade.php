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

<h1>Cadastrar Usuários</h1>

@section('aposMenu')

    <body>

    <form class="formCadastros" action = "">
        <label> Nome: </label> <br>
        <input class="cep" name=""><br>

        <label> CPF: </label> <br>
        <input class="cep" name=""><br>

        <label> Matrícula: </label> <br>
        <input class="cep" name=""><br>

        <label> Tipo de Usuário: </label> <br>
        <select class="selectpicker" name="" >
        <option>Selecione um Tipo</option>
        </select><br>

        <label> Login: </label> <br>
        <input class="cep" name=""><br>


        <label> Senha: </label> <br>
        <input type="password" class="cep" name="tipo"><br>

        <button class="buscarCep btn btn-success" type="submit">Salvar</button>
    </form>


    @endsection

    </body>


</html>

