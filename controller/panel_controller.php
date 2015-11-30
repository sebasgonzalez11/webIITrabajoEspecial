<?php
include_once 'controller/controller.php';
include_once 'view/panel_view.php';

class PanelController extends Controller{

  public function __construct(){
    $this->view = new PanelView();
  }

  public function cargar(){
    $this->checkSesion();
    $this->view->mostrar();
  }

}

 ?>
