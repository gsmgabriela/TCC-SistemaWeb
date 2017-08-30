<?php
/**
 * Created by PhpStorm.
 * User: gabrielasoares
 * Date: 21/08/2017
 * Time: 12:35
 */
?>


@extends('principal.opcoesBuscaEntrega')
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

<h1>Entregas</h1>


@section('aposMenu')

    <body>


    <table class="table table-hover posTable">
        <thead>
        <caption class="tituloTabela">Entregas Registradas</caption>
        <th>ID</th>
        <th>Nome</th>
        <th>Matrícula</th>
        <th>Tipo</th>

        <th>Editar</th>
        <th>Excluir</th>
        <th>Imprevistos</th>


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
            <td>

                {{--<form class="form-horizontal" action = "">--}}
                    {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">--}}
                    {{--<input type = "hidden" name = "_method" value = "PATCH">--}}
                    {{--<div class="col-sm-offset-3 col-sm-2">--}}
                        {{--<button type="submit" class="btn btn-primary btn-md edit">\</button>--}}
                    {{--</div>--}}
                {{--</form>--}}

            </td>

            <td>

                {{--<form class="form-horizontal" action = "" method = "post">--}}
                    {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">--}}
                    {{--<input type = "hidden" name = "_method" value = "DELETE">--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-sm-offset-3 col-sm-2">--}}
                            {{--<button type="submit" class="btn btn-primary btn-md del">X</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}

            </td>

            <td>

                <form class="form-horizontal" action = "{{route('imprevisto.index')}}">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-2">
                        <button type="submit" class="btn btn-primary btn-md del">In</button>
                    </div>
                </div>
                </form>

            </td>
        </tr>

        {{--@empty--}}
        <tr>
            <td colspan="2"> Nenhuma Entrega Registrada. </td>
        </tr>

        {{--@endforelse--}}
    </table>


    </body>
@endsection

</html>
