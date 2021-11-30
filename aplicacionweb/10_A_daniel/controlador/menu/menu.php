<?php

session_start();
if($_SESSION['tipo_usuario'] == 1){
  echo '
    <li class="collapse navbar-collapse">
      <a class="nav-link" href="home"> Pagina de inicio
      <span class="visually-hidden">(current)</span>
    </li>
    <li class="collapse navbar-collapse">
      <a class="nav-link" href="#">Administrador</a>
    </li>
  ';
}

if($_SESSION['tipo_usuario'] == 2){
  echo '
    <li class="collapse navbar-collaps">
      <a class="nav-link" href="home"> Pagina de inicio
      <span class="visually-hidden">(current)</span>
    </li>
    <li class="collapse navbar-collaps">
      <a class="nav-link" href="#">Usuario</a>
    </li>
  ';
}

?>