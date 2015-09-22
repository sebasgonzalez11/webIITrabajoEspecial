<?php
include_once 'view/dadant_view.php';
include_once 'model/dadant_model.php';

class Navegar{
  private $model;
  private $view;

  function __construct(){
    $this->model = new DadantModel();
    $this->view = new DadantView();
  }
  function cargarPagina($pagina){
    $this->view->cargarPagina($pagina);
  }
}
 ?>
