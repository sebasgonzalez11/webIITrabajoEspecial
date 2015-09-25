<?php
  include_once 'config/config_app.php';
  include_once 'controller/dadant_controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
  $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
     $controller  = new Controller();
     $controller->cargarPagina(ConfigApp::$ACTION_DEFAULT);
  }else {
    switch ($_REQUEST[ConfigApp::$ACTION]){
      case ConfigApp::$ACTION_NOSOTROS:
        $controller = new Controller();
        $controller->cargarPagina(ConfigApp::$ACTION_NOSOTROS);
        break;
      case ConfigApp::$ACTION_PRODUCTO:
        $controller = new Controller();
        $controller->cargarPagina(ConfigApp::$ACTION_PRODUCTO);
        break;
      case ConfigApp::$ACTION_CONTACTO:
        $controller = new Controller();
        $controller->cargarPagina(ConfigApp::$ACTION_CONTACTO);
        break;
      case ConfigApp::$ACTION_HOME:
        $controller = new Controller();
        $controller->cargarPagina(ConfigApp::$ACTION_HOME);
        break;
      default:
        echo 'Página no encontrada';
        break;
    }
  }
 ?>
