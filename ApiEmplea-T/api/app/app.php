<?php
  require $contexto_app . '/vendor/autoload.php';

  //configuracion de la aplicación
  $settings = require $contexto_app . '/app/settings.php';

  if ($env == 'production') {
    $settings ['displayErrorDetails'] = false;
  }

  $app = new \Slim\App(
  array(
    'settings' => $settings
  )); //Se crea la instancia de Slim

  //Se adquiere el container de Slim
  $container = $app-> getContainer();

  //se agregan los providers
  $providers = $contexto_app. '/app/Provider/*.php';
  foreach (glob($providers) as $filename) require $filename ;

   $routes = $contexto_app. '/app/Route/*.php';
   foreach (glob($routes) as $filename) require $filename ;

  $app -> run();
?>
