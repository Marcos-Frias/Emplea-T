<?php
 $app-> get('/empresa','EmpresaController:selectEmpresa');
 $app -> get('/empresa/{idempresa}','EmpresaController:selectEmpresaById');
 $app-> post('/empresa','EmpresaController:insertEmpresa');
 $app-> delete('/empresa{id}','EmpresaController:deleteEmpresa');
?>
