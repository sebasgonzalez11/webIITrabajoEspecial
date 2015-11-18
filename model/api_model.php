<?php
include_once 'model/model.php';

class PanelModel extends Model{

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
    }

    private function subirImagenes($archivo){
      $carpeta = "image/productos/";
      $carpeta = $carpeta . basename( $archivo[ 'name' ] );
      move_uploaded_file( $archivo[ 'tmp_name' ] , $carpeta);
      return $carpeta;
    }



    public function agregarCategoria($nuevaCategoria){
      try{
        $this->baseDatos->beginTransaction();
        $consulta = $this->baseDatos->prepare('INSERT INTO categoria(categoria) VALUES(?)');
        $consulta->execute(array($nuevaCategoria));
        $this->baseDatos-commit();
      }
      catch(Exception $e){
        $this->baseDatos-rollBack();
      }

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

 ?>
