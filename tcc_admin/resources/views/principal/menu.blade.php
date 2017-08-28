<?php
/**
 * Created by PhpStorm.
 * User: gabrielasoares
 * Date: 03/07/2017
 * Time: 11:50
 */
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Urban Spin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="@yield( 'home', route('home'))">Home</a></li>
      <li><a href="@yield( 'tipo', route('cadastros'))">Cadastros</a></li>

    </ul>
    <form class="menuEntregas" action="@yield( 'entregas', route('entregas.index'))">
    <button type="submit" class="btn btn-warning navbar-btn">Entregas</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuário X</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>
@yield('aposMenu')