<?php
include_once 'model.php';

class ProductoModel extends Model{

  public function getProductos(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto');
    $consulta->execute();
    return $consulta->fetchAll();
  }

  public function getProductobyid($id){
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto WHERE id=?');
    $consulta->execute(array($id));
    return $consulta->fetch();
    
  }

  public function getProductosPorCategoria($categoria){
    $consulta = $this->baseDatos->prepare('SELECT * FROM producto WHERE categoria=?');
    $consulta->execute(array($categoria));
    return $consulta->fetchAll();

  }

  public function agregarProducto($nombProducto,$descrProducto,$precProducto,$categProducto,$imagenProducto){
    try{
      $ruta = $this->subirImagenes($imagenProducto);
      $this->baseDatos->beginTransaction();
      $consulta = $this->baseDatos->prepare('INSERT INTO producto(id,nombre,descripcion,precio,categoria,imagen) VALUES(?,?,?,?,?,?)');
      $consulta->execute(array(null,$nombProducto,$descrProducto,$precProducto,$categProducto,$ruta));
      $this->baseDatos->commit();
    }
    catch(Exception $e){
      $this->baseDatos->rollBack();
    }
  }

  private function subirImagenes($archivo){
    $carpeta = "../image/productos/";
    $uniqid = uniqid();
    $direccion="image/productos/".$uniqid.basename( $archivo[ 'name' ] );
    $carpeta = $carpeta .$uniqid. basename( $archivo[ 'name' ] );
    move_uploaded_file( $archivo[ 'tmp_name' ] , $carpeta);
    return $direccion;
  }

  public function updateProducto($id,$nombProducto,$descrProducto,$precProducto,$categProducto,$imagenProducto){
    try{
      $ruta = $this->subirImagenes($imagenProducto);
      $consulta = $this->baseDatos->prepare('UPDATE producto SET nombre=?,descripcion=?,precio=?,categoria=?,imagen=?
      WHERE id=?');
      $consulta->execute(array($nombProducto,$descrProducto,$precProducto,$categProducto,$ruta,$id));
    }
    catch(Exception $e){
      $this->baseDatos->rollBack();
    }
  }

  public function deleteProducto($id){
    $consulta = $this->baseDatos->prepare('DELETE FROM producto WHERE id=?');
    $consulta->execute(array($id));
  }
}
?>
