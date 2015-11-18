<?php
include_once 'view/producto_view.php';
include_once 'model/producto_model.php';

class ProductoController extends Controller{

  public function __construct(){
    $this->view = new ProductoView();
    $this->model = new ProductoModel();
  }

  public function cargar(){
    $this->view->mostrar($this->model->getProductos(), $this->model->getCategorias());
  }

  public function cargarPorCategoria(){
  if(isset($_POST['categoria'])){
    $this->view->mostrarPorCategoria($this->model->getCategorias(),$this->model->getProductosPorCategoria($_POST['categoria']));
  }
}
}

 ?>
