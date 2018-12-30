<?php
  $container['empleo'] = function ($container){
    return new App\Model\EmpleoModel($container);
  };

  $container['empresa'] = function ($container){
    return new App\Model\EmpresaModel($container);
  };
?>
