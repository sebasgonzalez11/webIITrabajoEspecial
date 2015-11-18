<?php
include_once 'controller/controller.php';
include_once 'view/nosotros_view.php';

class NosotrosController extends Controller{

  public function __construct(){
    $this->smarty = new NosotrosView();
  }

  public function cargar(){
    $this->smarty->mostrar();
  }
}
 ?>
