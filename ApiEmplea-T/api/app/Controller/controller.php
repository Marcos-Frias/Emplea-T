<?php
  namespace App\Controller;
  class Controller{
    /**
    *Contructor de la class_exists
    *@param [objeto] $container [Objeto de la aplicacion]
    */
    public function __construct($container) {
      $this->container = $container;
    }
   /**
   *Metodo que es invocado por las clases
   *@param [string] $property [propiedad a obtener]
   *@return [objeto] [retorna el objeto del container]
   */

    public function __get($property){
      if ($this->container->{$property}) //se verifica si la propiedad existe
      return $this->container->{$property}; //se retorna el objeto
    }

    public function getObject($params){
      return (object)$params;
    }
  }

?>
