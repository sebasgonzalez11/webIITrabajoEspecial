<?php
require_once 'api_dadant.php';

$dadantAPI = new APIDadant($_REQUEST['parametros']);
echo $dadantAPI->processAPI();
 ?>
