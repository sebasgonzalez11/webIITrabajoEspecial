<?php
class Model{
  private $baseDatos;

  public function __construct(){
    $this->baseDatos = new PDO('mysql:host=localhost;bname= dadantbd;charset=utf8', 'root','');
    $this->baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function agregarProducto($nuevoProducto, $imagenProducto){
    $ruta = $this->subirImagen($imagenProducto);//reemplazar en nuevoProducto la ruta de la imagen a agregar
    $nuevoProducto['imagenProducto'] = $ruta;
    $consulta = $this->baseDatos->prepare('INSERT INTO producto (nuevoProducto) VALUES(?)');
    $consulta->execute(array($nuevoProducto));
    $id_producto = $this->baseDatos->lastInsertId();
  }

  private function subirImagen($archivo){
    $destino = 'image/productos/'.uniqid().$archivo['name'][$key];
    move_uploaded_file($archivo['tmp_name'][$key], $destino);
    return $destino;
  }

  public function getProductos(){
    $productos = array();
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto');
    $consulta->execute();
    return $consulta;
  }

  public function borrarProducto($id_prod){
  $consulta = $this->baseDatos->prepare('DELETE FROM producto WHERE id=?');
  $consulta->execute(array($id_prod));
  }

  public function agregarCategoria($nuevaCategoria){
      $consulta = $this->baseDatos->prepare('INSERT INTO dadantbd.categoria(categoria) VALUES(?)');
      $consulta->execute(array($nuevaCategoria));
      return true;
  }

  public function getCategorias(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM dadantbd.categoria');
    $consulta->execute();
    return $consulta;
  }
}
 ?>
