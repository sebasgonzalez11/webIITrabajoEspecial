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
    $this->view->cargarPanel($this->model->getCategorias(),$this->model->getCategorias(),$this->model->getProductos());
  }

  public function agregarProducto(){
    if(isset($_POST['nombre']) && isset($_POST['precio']) && isset($_FILES['imagen'])){
      $this->model->agregarProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria'],
       $_FILES['imagen']);
       $this->cargarPanel();
     }
     else{
      $this->view->mostrarError('Error');
    }
  }

  public function agregarCategoria(){
    if(isset($_POST['nuevaCategoria'])){
      $this->model->agregarCategoria($_POST['nuevaCategoria']);
      $this->cargarPanel();
    }else{
      $this->view->mostrarError('No se agrego la categoria');
    }
  }
  public function updateProducto(){
    if(isset($_POST['id_p']) && isset($_POST['nombre']) && isset($_POST['precio'])){
      $this->model->updateProducto($_POST['id_p'],$_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria'],
       $_FILES['imagen']);
      $this->cargarPanel();
    }
  }
}
 ?>
