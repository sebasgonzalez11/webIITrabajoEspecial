<?php
include_once 'model.php';

class LoginModel extends Model{

  function getUsuario($email){
    $consulta = $this->baseDatos->prepare("SELECT * FROM login WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }
}
?>
