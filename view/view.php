<?php
include_once 'libs/Smarty.class.php';

class View{
  protected $smarty;
  protected $errores;

  public function __construct(){
    $this->smarty = new Smarty();
    $this->errores = array();
  }

  public function mostrarError($error){
    array_push($this->errores, $error);
  }

}
 ?>
