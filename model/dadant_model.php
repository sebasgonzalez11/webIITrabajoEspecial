<?php
class Model{
  private $baseDatos;

  public function __construct(){
    $this->baseDatos = new PDO('mesql:host=localhost; dbname= dadantbd; charset=utf8', '','');
    $this->baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function agregarProducto($producto, $archivo){
    $ruta = $this->subirImagen($archivo);
    $consulta = $this->baseDatos->prepare('INSERT INTO producto(producto) VALUES(?)');
    $consulta = execute(array($producto));
    $id_producto = $this->baseDatos->lastInsertId();
  }

  private function subirImagen($archivo){
    $destino = 'image/productos'.uniqid().$archivo['name'][$key];
    move_uploaded_file($archivo['tmp_name'][$key], $destino);
    return $destino;
  }

  public function getProductos(){
    $productos = array();
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto');
    $consulta->execute();
    while($producto = $consulta->fetch()){
      $aux = $this->baseDatos->prepare('SELECT *FROM categoria where categoria=?');
      $aux->execute(array($producto['id']));
      $categoria = $aux->fetchAll();
      $productos['categoria'] = $categoria;
      $productos[] = $producto;
    }
    return $productos;
  }

  public function borrarProducto($id_prod){
  $consulta = $this->baseDatos->prepare('DELETE FROM producto WHERE id=?');
  $consulta->execute(array($id_prod));
  }
}
 ?>
