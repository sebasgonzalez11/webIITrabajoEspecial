<?php
include_once 'model.php';

class CategoriaModel extends Model{

  public function getCategorias(){
    $consulta = $this->baseDatos->prepare('SELECT * FROM categoria');
    $consulta->execute();
    return $consulta->fetchAll();
  }

  public function agregarCategoria($nuevaCategoria){
    try{
      $this->baseDatos->beginTransaction();
      $consulta = $this->baseDatos->prepare('INSERT INTO categoria(categoria) VALUES(?)');
      $consulta->execute(array($nuevaCategoria));
      $this->baseDatos->commit();
      return $this->baseDatos->lastInsertId();
    }
    catch(Exception $e){
      $this->baseDatos-rollBack();
    }
  }

  public function updateCategoria($id,$categoria){
    try{
      $consulta = $this->baseDatos->prepare('UPDATE categoria SET categoria=? WHERE id=?');
      $consulta->execute(array($categoria,$id));
      return $consulta->rowCount()>0;
    }
    catch(Exception $e){
      $this->baseDatos->rollBack();
    }
  }

  public function deleteCategoria($id){
    $consulta = $this->baseDatos->prepare('DELETE FROM categoria WHERE id=?');
    $consulta->execute(array($id));
  }

}
?>
