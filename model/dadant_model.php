<?php
class Model{
  private $baseDatos;

  public function __construct(){
    $this->baseDatos = new PDO('mysql:host=localhost;bname= dadantbd;charset=utf8', 'root','');
    $this->baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function agregarProducto($nombProducto,$descrProducto,$precProducto,$categProducto,$imagenProducto){
    try{
      $ruta = $this->subirImagenes($imagenProducto);
      $this->baseDatos->beginTransaction();
      $consulta = $this->baseDatos->prepare('INSERT INTO dadantbd.producto(id,nombre,descripcion,precio,categoria,imagen) VALUES(?,?,?,?,?,?)');
      $consulta->execute(array(null,$nombProducto,$descrProducto,$precProducto,$categProducto,$ruta));
      $this->baseDatos->commit();
    }
    catch(Exception $e){
      $this->baseDatos->rollBack();
    }
  }
  
  private function subirImagenes($archivo){
    $carpeta = "image/productos/";
    $carpeta = $carpeta . basename( $archivo[ 'name' ] );
    move_uploaded_file( $archivo[ 'tmp_name' ] , $carpeta);
    return $carpeta;
  }

  public function getProductos(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM dadantbd.producto');
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
  }

  public function getCategorias(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM dadantbd.categoria');
    $consulta->execute();
    return $consulta;
  }
}
?>
