<?php
include_once 'view/view.php';

class NosotrosView extends View {

    public function mostrar(){
      $this->smarty->display('nosotros.tpl');
    }
  }
 ?>
