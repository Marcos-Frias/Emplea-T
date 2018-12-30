<?php
  namespace App\Model;

  /**
   *
   */
  class EmpleoModel extends Model{

    public function selectEmpleos(){
      $result = $this->db->select('oferta',
      [
          "[>]escolaridad" => ["id_escolaridad" => "idEscolaridad"],
          "[>]puesto" => ["id_puesto" => "idPuesto"],
          "[>]empresa" => ["id_empresa" => "idempresa"],
          "[>]sexo" => ["id_sexo"=>"idsexo"]
      ],[
          'idOferta',
          'horario',
          'sueldo',
          'dias',
          'descripcion',
          'puesto.nombrePuesto',
          'empresa.nombreEmpresa',
          'experienciaLab',
          'escolaridad.nombreEscolaridad',
          'conocimientosReq',
          'funcionesDes',
          'prestaciones',
          'documentacion',
          'exclusividad',
          'sexo.sexo',
          'imagenTrabajo'
      ]);

      if (!is_null($this->db->error()[1])) {
        return array(
          'error ' => true,
          'description ' => $this->db->error()[2]);
      }elseif (empty($result)) {
        return  array(
          'notFound ' => true,
          'description ' => ' 0 row affected' );
      }
      return array(
        'success' => true,
        'description' => ' Empleos were found',
        'empleos' => $result
      );
    }

    public function selectEmpleoById($idempleo){
      $result = $this->db->select('oferta',
      [
          "[>]escolaridad" => ["id_escolaridad" => "idEscolaridad"],
          "[>]puesto" => ["id_puesto" => "idPuesto"],
          "[>]empresa" => ["id_empresa" => "idempresa"],
          "[>]sexo" => ["id_sexo"=>"idsexo"]
      ],[
          'idOferta',
          'horario',
          'sueldo',
          'dias',
          'descripcion',
          'puesto.nombrePuesto',
          'empresa.nombre',
          'experienciaLab',
          'escolaridad.nombreEscolaridad',
          'conocimientosReq',
          'funcionesDes',
          'prestaciones',
          'documentacion',
          'exclusividad',
          'sexo.sexo',
          'imagenTrabajo'
        ],[
          'idOferta' => $idempleo]
       );
       if (!is_null($this->db->error()[1])) {
         return array(
           'error ' => true,
           'description ' => $this->db->error()[2]);
         }elseif (empty($result)) {
           return  array(
           'notFound ' => true,
           'description ' => ' 0 row affected' );
         }
         return array(
           'success' => true,
           'description' => ' Empleo were found',
           'empleos' => $result
         );
       }

    public function insertEmpleo($empleo){
      $result = $this->db.insert('employee',
      [
        'horario'          => $empleo ['horario'],
        'sueldo'           => $empleo ['sueldo'],
        'dias'             => $empleo ['dias'],
        'descripcion'      => $empleo ['descripcion'],
        'id_puesto'        => $empleo ['id_puesto'],
        'experienciaLab'   => $empleo ['experienciaLab'],
        'id_escolaridad'   => $empleo ['id_escolaridad'],
        'conocimientosReq' => $empleo ['conocimientosReq'],
        'funcionesDes'     => $empleo ['funcionesDes'],
        'prestaciones'     => $empleo ['prestaciones'],
        'documentacion'    => $empleo ['documentacion'],
        'exclusividad'     => $empleo ['exclusividad'],
        'id_sexo'          => $empleo ['id_sexo'],
        'imagenTrabajo'    => $empleo ['imagenTrabajo']

      ]);

      if (!is_null($this->db->error()[1])) {
        return array(
          'error ' => true,
          'description ' => $this->db->error()[2]);
      }
      return array(
        'success' => true,
        'description' => ' Empleo was inserted',
        'empleos' => $result
      );
    }

    public function deleteEmpleo($id){
      $result = $this->db->delete('oferta',[
          'idOferta' => $id]);
        if (!is_null($this->db->error()[1])) {
         return array(
           'error ' => true,
           'description ' => $this->db->error()[2]);
         }elseif (empty($result)) {
           return  array(
           'notFound ' => true,
           'description ' => ' 0 row affected' );
         }
         return array(
           'success' => true,
           'description' => ' Employees was deleted',
           'employees' => $result
         );
       }
}


?>
