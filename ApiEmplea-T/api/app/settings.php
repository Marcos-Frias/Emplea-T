<?php
  //Configuracion de la base de datos
  $db = require $contexto_app.'/app/database/config.php';

  //configuracion de la app
  $settings = array(
    'displayErrorDetails' => true,
    'determineRouterBeforeAppMiddLeware' => true,
    'db' => $db
  );

  //se agrega el contexto de la app
  $settings ['contexto'] = $contexto_app;

  return $settings;
  ?>
