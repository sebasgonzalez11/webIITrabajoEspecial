<?php
include_once 'view/view.php';

class IndexView extends View{

    public function mostrar(){
      $this->smarty->display('index.tpl');
    }

    public function mostrarHome(){
      $this->smarty->display('home.tpl');
    }
  }

 ?>
