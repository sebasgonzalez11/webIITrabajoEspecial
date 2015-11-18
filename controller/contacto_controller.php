<?php
include_once 'controller/controller.php';
include_once 'view/contacto_view.php';

class ContactoController extends Controller{

  public function __construct(){
    $this->view = new ContactoView();
  }

  public function cargar(){
    $this->view->mostrar();
  }
}
 ?>
