<?php
include_once 'model/model.php';

class ProductoModel extends Model{

  public function getProductos(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto');
    $consulta->execute();
    return $consulta->fetchAll();
  }

  public function getCategorias(){
   $consulta = $this->baseDatos->prepare('SELECT * FROM categoria');
   $consulta->execute();
   return $consulta->fetchAll();
 }

 public function getProductosPorCategoria($categoria){
      $consulta = $this->baseDatos->prepare('SELECT * FROM producto WHERE categoria=?');
      $consulta->bindParam(1,$categoria);
      $consulta->execute();
      return $consulta->fetchAll();

    }
}
 ?>
