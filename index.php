<?php
  include_once 'config/config_app.php';
  include_once 'controller/contacto_controller.php';
  include_once 'controller/index_controller.php';
  include_once 'controller/nosotros_controller.php';
  include_once 'controller/producto_controller.php';
  include_once 'controller/login_controller.php';
  include_once 'controller/panel_controller.php';


  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
  $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
     $controller  = new IndexController();
     $controller->cargar();
  }else {
    switch ($_REQUEST[ConfigApp::$ACTION]){
      case ConfigApp::$ACTION_HOME:
        $controller = new IndexController();
        $controller->cargarHome();
        break;
      case ConfigApp::$ACTION_NOSOTROS:
        $controller = new NosotrosController();
        $controller->cargar();
        break;
      case ConfigApp::$ACTION_PRODUCTO:
        $controller = new ProductoController();
        $controller->cargar();
        break;
      case ConfigApp::$ACTION_MOSTRAR_POR_CATEGORIA:
        $controller = new ProductoController();
        $controller->cargarPorCategoria();
        break;
      case ConfigApp::$ACTION_CONTACTO:
        $controller = new ContactoController();
        $controller->cargar();
        break;
      case ConfigApp::$ACTION_FORMLOGIN:
        $controller = new LoginController();
        $controller->login();
        break;
      case ConfigApp::$ACTION_CARGA_PANEL:
        $controller = new PanelController();
        $controller->cargar();
        break;
      default:
        echo 'Página no encontrada';
        break;
    }
  }
 ?>
