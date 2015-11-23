<?php
class Controller {
  protected $view;
  protected $model;

  public function checkSesion(){
    session_start();
    if(!isset($_SESSION["email"])){
      header("Location: index.php");
      die();
    }
  }

}
 ?>
