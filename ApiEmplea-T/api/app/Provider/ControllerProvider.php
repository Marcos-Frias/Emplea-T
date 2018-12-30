<?php
  $container['EmpleoController'] = function ($container){
    return new App\Controller\EmpleoController($container);
  };

  $container['EmpresaController'] = function ($container){
    return new App\Controller\EmpresaController($container);
  };
?>
