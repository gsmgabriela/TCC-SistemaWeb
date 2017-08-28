
<div class="opcoesGeral">

<form action="@yield( 'listaTipos', route('tipo.index'))" >
    <div class="">
        <div class="">
            <button class="formOpcoesGeral btn btn-default" type="submit" class="btn btn-primary ">Tipos de Usuário</button>
        </div>
    </div>
</form>

<form class="" action="@yield( 'listaUsuarios', route('usuario.index'))" >
    <div class="">

            <button class="formOpcoesGeral btn btn-default" type="submit" class="btn btn-primary ">Usuários</button>

    </div>
</form>


    <form class="" action="@yield( 'listaEntregadores', route('entregador.index'))" >
        <div class="">

            <button class="formOpcoesGeral btn btn-default" type="submit" class="btn btn-primary ">Entregadores</button>

        </div>
    </form>



</div>
