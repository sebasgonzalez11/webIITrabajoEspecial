<?php
include_once 'view/view.php';

class ProductoView extends View{

  public function mostrar($productos, $categorias){
    $this->smarty->assign('errores', $this->errores);
    $this->smarty->assign('productos', $productos);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->caching = false;
    $this->smarty->display('producto.tpl');
  }

  public function mostrarPorCategoria($categorias,$productos){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->caching = false;
    $this->smarty->display('producto.tpl');
  }
  public function cargarbyid($producto){
    $this->smarty->assign('producto',$producto);
    $this->smarty->caching = false;
    $this->smarty->display('single_producto.tpl');
  }
}
 ?>
