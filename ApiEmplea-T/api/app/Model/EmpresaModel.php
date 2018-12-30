<?php
  namespace App\Model;

  /**
   *
   */
  class EmpresaModel extends Model{

    public function selectEmpresa(){
      $result = $this->db->select('empresa',[
          'idEmpresa',
          'Nombre',
          'direccion',
          'vision',
          'mision',
          'logo',
          'facebook',
          'youtube',
          'twitter',
          'sitioweb'
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
        'description' => ' Empresas were found',
        'empresas' => $result
      );
    }

    public function selectEmpresaById($idEmpresa){
      $result = $this->db->select('empresa',[
          'idEmpresa',
          'Nombre',
          'direccion',
          'vision',
          'mision',
          'logo',
          'facebook',
          'youtube',
          'twitter',
          'sitioweb'
          ],[
            'idEmpresa' => $idEmpresa
          ]
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
           'description' => ' Empresa were found',
           'empresas' => $result
         );
       }

    public function insertEmpresa($empresa){
      $result = $this->db.insert('employee',
      [
        'Nombre'    => $empresa['Nombre'],
        'direccion' => $empresa['direccion'],
        'vision'    => $empresa['vision'],
        'mision'    => $empresa['mision'],
        'logo'      => $empresa['logo'],
        'facebook'  => $empresa['facebook'],
        'youtube'   => $empresa['youtube'],
        'twitter'   => $empresa['twitter'],
        'sitioweb'  => $empresa['sitioweb'],
      ]);

      if (!is_null($this->db->error()[1])) {
        return array(
          'error ' => true,
          'description ' => $this->db->error()[2]);
      }
      return array(
        'success' => true,
        'description' => ' Empresa was inserted',
        'empresas' => $result
      );
    }

    public function deleteEmpresa($id){
      $result = $this->db->delete('empresa',[
          'idEmpresa' => $id]);
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
           'description' => ' Empresa was deleted',
           'empresas' => $result
         );
       }
}


?>
