<?php
include_once 'view/view.php';

class NosotrosView extends View {

    public function mostrar(){
      $this->smarty->assign('errores', $this->errores);
      $this->smarty->display('nosotros.tpl');
    }
  }
 ?>
