<?php
require_once 'api_base.php';
require_once '../model/abm_model.php';

class APIDadant extends ApiBase {
  private $model;

  function __construct($request){
    parent::__construct($request);
    $this->model = new ABMModel();
  }

  function categorias(){
    switch ($this->method) {
      case 'GET':
        return $this->model->getCategorias();
        break;
      case 'POST':
        if(isset($_REQUEST['categoria'])) {return $this->model->agregarCategoria($_REQUEST['categoria']);}
        else{ return ($_REQUEST);}
        break;
      default:
        return 'Verbo no soportado';
        break;
    }
  }

  function productos(){
    switch ($this->method){
      case 'GET':
        return $this->model->getProductos();
        break;
      case 'POST':
        if(isset($_POST['nombre'])&&isset($_POST['precio'])) return $this->model->agregarProducto($_POST['nombre'],
          $_POST['descripcion'],$_POST['precio'],$_POST['categoria'],$_POST['imagen']);
        break;
      case 'DELETE':
        break;
      case 'PUT':
        break;
      default:
        return 'Verbo no soportado';
        break;
    }
  }

}
?>
