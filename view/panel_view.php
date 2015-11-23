<?php
include_once 'view/view.php';

class PanelView extends View{

  public function mostrar(){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->display('panel.tpl');
  }
}
 ?>
