<?php
include_once 'view/dadant_view.php';
include_once 'model/dadant_model.php';

class Controller{
  private $view;
  private $model;

  public function __construct(){
    $this->view = new View();
    $this->model = new Model();
  }
  public function cargarPagina($pagina){
    $this->view->cargarPagina($pagina);
  }

  public function cargarPanel(){
    $this->view->cargarPanel($this->model->getCategorias());
  }

  public function agregarProducto(){
    if(isset($_REQUEST['producto']) && isset($_FILES['imagenProducto'])){
      $this->model->agregarProducto($_REQUEST);
    }else{
      $this->view->mostrarError('Error');//HACER ESTE METODO
    }
  }
  public function agregarCategoria(){
    $estado = false;
    if(isset($_POST['nuevaCategoria'])){
      $estado = $this->model->agregarCategoria($_POST['nuevaCategoria']);
      return $estado;
    }else{
      return $estado;
    }
  }
}
 ?>
