<?php
  include_once 'view/view.php';

 class ContactoView extends View {

    public function mostrar(){
      $this->smarty->assign('errores', $this->errores);
      $this->smarty->display('contacto.tpl');
    }
  }

 ?>
