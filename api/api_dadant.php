<?php
require_once 'api_base.php';
require_once '../model/producto_model.php';
require_once '../model/categoria_model.php';

class APIDadant extends ApiBase {
  private $modelProducto;
  private $modelCategoria;

  function __construct($request){
    if($this->checkSesion()){
      parent::__construct($request);
      $this->modelProducto = new ProductoModel();
      $this->modelCategoria = new CategoriaModel();
    }
  }

  function categoria(){
      switch ($this->method) {
        case 'GET':
          return $this->modelCategoria->getCategorias();
          break;
        case 'POST':
          if(isset($_REQUEST['categoria'])) return $this->modelCategoria->agregarCategoria($_REQUEST['categoria']);
          break;
        case 'PUT':
          if(count($this->args) > 0) {
              parse_str(file_get_contents("php://input"),$post_vars);
              return $this->modelCategoria->updateCategoria($this->args[0],$post_vars['categoria']);}
          break;
        case 'DELETE':
          if(count($this->args)>0) return $this->modelCategoria->deleteCategoria($this->args[0]);
          break;
        default:
          return 'Verbo no soportado';
          break;
      }
  }

  function producto(){
      switch ($this->method){
        case 'GET':
          return $this->modelProducto->getProductos();
          break;
        case 'POST':
          if(isset($_REQUEST['nombre']) && isset($_REQUEST['precio']) && isset($_REQUEST['descripcion']) &&
           isset($_REQUEST['categoria']) && isset($_FILES['imagen'])){
            if(count($this->args)==0){
              return $this->modelProducto->agregarProducto($_REQUEST['nombre'],
              $_REQUEST['descripcion'],$_REQUEST['precio'],$_REQUEST['categoria'],$_FILES['imagen']);
            }else{
              return $this->modelProducto->updateProducto($this->args[0],$_REQUEST['nombre'],
              $_REQUEST['descripcion'],$_REQUEST['precio'],$_REQUEST['categoria'],$_FILES['imagen']);
            }
          }
          break;
        case 'DELETE':
          if(count($this->args)>0) return $this->modelProducto->deleteProducto($this->args[0]);
          break;
        default:
          return 'Verbo no soportado';
          break;
      }
  }

  public function checkSesion(){
    $time = 600;
    session_start();
    if(isset($_SESSION["email"])){
      if(isset($_SESSION["expire"]) && time() > $_SESSION["expire"] + $time){
        session_destroy();
        return false;
      }
      else{
        $_SESSION["expire"] = time();
        return true;
      }
    }else{
      return false;
    }
  }

}
?>
