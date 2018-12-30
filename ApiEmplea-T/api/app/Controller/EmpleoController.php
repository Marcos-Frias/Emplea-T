<?php
namespace App\Controller;

/**
 *
 */
class EmpleoController extends Controller{

  function selectEmpleos ($request, $response){
    $message = $this->empleo->selectEmpleos();
    return json_encode($message);
  }

  public function selectEmpleoById($request, $response){
      $idempleo = $request->getAttribute('idempresa');
      $message = $this->empleo->selectEmpleoById($idempleo);
      return json_encode ($message);
    }

  public function insertEmpleo($request, $response){
    $empleo = $request->getParsedBody();
    $message = $this->empleo->insertEmpleo($empleo);
    return json_encode($message);
  }

  public function deleteEmpleo($request, $response){
      $id = $request->getAttribute('id');
      $message = $this->empleo->deleteEmpleo($id);
      return json_encode ($message);
    }
}

?>
