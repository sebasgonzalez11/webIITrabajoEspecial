<?php
include_once 'libs/Smarty.class.php';

class View{
  private $smarty;
  private $errores;

  public function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();
  }

  public function cargarPagina($seccion){
    $this->smarty->display($seccion.'.tpl');
  }

  public function cargarPanel($categorias, $productos){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->assign('productos', $productos);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->caching = false;
    $this->smarty->display('panel.tpl');
  }
  public function mostrarError($error){
    array_push($this->errores, $error);
  }

}
 ?>
