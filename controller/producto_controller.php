<?php
include_once 'view/producto_view.php';
include_once 'model/producto_model.php';
include_once 'model/categoria_model.php';

class ProductoController extends Controller{
  private $modelCategoria;

  public function __construct(){
    $this->view = new ProductoView();
    $this->model = new ProductoModel();
    $this->modelCategoria =new CategoriaModel();
  }

  public function cargar(){
    $this->view->mostrar($this->model->getProductos(), $this->modelCategoria->getCategorias());
  }

  public function cargarPorCategoria(){
    if(isset($_POST['categoria'])){
      $this->view->mostrarPorCategoria($this->modelCategoria->getCategorias(),$this->model->getProductosPorCategoria($_POST['categoria']));
    }
  }

  public function cargarbyid(){
    if(isset($_REQUEST['id'])){
      $this->view->cargarbyid($this->model->getProductobyid($_REQUEST['id']));
    }
  }

}

 ?>
