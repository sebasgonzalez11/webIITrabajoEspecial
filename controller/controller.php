<?php
class Controller {
  protected $view;
  protected $model;

  public function checkSesion(){
    $time = 600;
    session_start();
    if(isset($_SESSION["email"])){
      if(isset($_SESSION["expire"]) && time() > $_SESSION["expire"] + $time){
        session_destroy();
      }
      else{
        $_SESSION["expire"] = time();
      }
    }else{
      header("Location: index.php");
      die();
    }
  }

}
?>
