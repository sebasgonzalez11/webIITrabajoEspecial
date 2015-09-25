<?php
include_once 'view/dadant_view.php';
include_once 'model/dadant_model.php';

class Controller{
  private $view;
  private $model;

  function __construct(){
    $this->view = new View();
    $this->model = new Model();
  }
  function cargarPagina($pagina){
    $this->view->cargarPagina($pagina);
  }

  function agregarProducto(){
    if(isset($_REQUEST['producto']) && isset($_FILES['urlImage'])){
      $this->model->agregarProducto($_REQUEST);
    }else{
      $this->view->mostrarError('La tarea que intenta crear esta vacia');//HACER ESTE METODO
    }
  }
}
 ?>
 
