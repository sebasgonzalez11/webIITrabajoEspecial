<?php
include_once 'libs/Smarty.class.php';

class View{
  private $smarty;

  public function __construct(){
    $this->smarty = new Smarty();
  }
  public function cargarPagina($seccion){
    $this->smarty->display($seccion.'.tpl');
  }
  public function mostrarProductos($productos){
    $this->smarty->assing('productos', $productos);
    $this->smarty->display('productos.tpl');
  }
}
 ?>
