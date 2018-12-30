<?php
 $app-> get('/empleo','EmpleoController:selectEmpleos');
 $app -> get('/empleo/{idempresa}','EmpleoController:selectEmpleoById');
 $app-> post('/empleo','EmpleoController:insertEmpleo');
 $app-> delete('/empleo{id}','EmpleoController:deleteEmpleo');
?>
