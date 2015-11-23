<?php
include_once 'controller/controller.php';
include_once 'view/panel_view.php';
include_once 'model/abm_model.php';

class PanelController extends Controller{

  public function __construct(){
    $this->view = new PanelView();
    $this->model = new ABMModel();
  }

  public function cargar(){
    $this->checkSesion();
    $this->view->mostrar();
  }

}

 ?>
