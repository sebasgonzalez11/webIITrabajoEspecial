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
      case ConfigApp::$ACTION_PANEL:
        $controller = new Controller();
        $controller->cargarPanel();
        break;
      case ConfigApp::$ACTION_NUEVA_CATEGORIA:
        $controller = new Controller();
        $controller->agregarCategoria();
        break;
      case ConfigApp::$ACTION_NUEVO_PRODUCTO:
        $controller = new Controller();
        $controller->agregarProducto();
        break;
      case ConfigApp::$ACTION_UPDATE_PRODUCTO:
        $controller = new Controller();
        $controller->updateProducto();
        break;
      case ConfigApp::$ACTION_DELETE_PRODUCTO:
        $controller = new Controller();
        $controller->deleteProducto();
        break;
      case ConfigApp::$ACTION_FORMLOGIN:
        $controller = new Controller();
        $controller->login();
        break;
      default:
        echo 'Página no encontrada';
        break;
    }
  }
 ?>
