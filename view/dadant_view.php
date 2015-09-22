<?php
include_once 'libs/Smarty.class.php';

class DadantView{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty();
  }
  function cargarPagina($seccion){
    $this->smarty->display($seccion.'.tpl');
  }
}
 ?>
