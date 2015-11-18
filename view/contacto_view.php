<?php
  include_once 'view/view.php';

 class ContactoView extends View {

    public function mostrar(){
      $this->smarty->display('contacto.tpl');
    }
  }

 ?>
