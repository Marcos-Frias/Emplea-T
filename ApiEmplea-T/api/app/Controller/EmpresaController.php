<?php
namespace App\Controller;

/**
 *
 */
class EmpresaController extends Controller{

  function selectEmpresa ($request, $response){
    $message = $this->empresa->selectEmpresa();
    return json_encode($message);
  }

  public function selectEmpresaById($request, $response){
      $idEmpresa = $request->getAttribute('idempresa');
      $message = $this->empresa->selectEmpresaById($idEmpresa);
      return json_encode ($message);
    }

  public function insertEmpresa($request, $response){
    $empresa = $request->getParsedBody();
    $message = $this->empresa->insertEmpresa($empresa);
    return json_encode($message);
  }

  public function deleteEmpresa($request, $response){
      $id = $request->getAttribute('id');
      $message = $this->empresa->deleteEmpresa($id);
      return json_encode ($message);
    }
}

?>
