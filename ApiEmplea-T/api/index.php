<?php
  header ('Access-Control-Allow-Credentials: true');
  header ('Access-Control-Allow-Origin: *');
  header ('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
  header ('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Method, Authorization');

  session_start();

  //Directorio de la aplicacion
  $contexto_app = __DIR__;

  //Se establece el entorno de la aplicacion
  $env = 'development'; //production, development

  //Se agrega la configuracion de la App
  require $contexto_app . '/app/app.php';
?>
