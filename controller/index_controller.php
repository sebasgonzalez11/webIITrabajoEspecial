<?php
include_once 'controller/controller.php';
include_once 'view/index_view.php';

class IndexController extends Controller {

  public function __construct(){
    $this->view = new IndexView();
  }

  public function cargar(){
    $this->view->mostrar();
  }

  public function cargarHome(){
    $this->view->mostrarHome();
  }
}

 ?>
