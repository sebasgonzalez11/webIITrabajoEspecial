<?php

class Model{
  protected $baseDatos;

  public function __construct(){
    $this->baseDatos = new PDO('mysql:host=localhost;dbname=dadantbd;charset=utf8', 'root','');
    $this->baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
  ?>
