<?php
include_once 'controller/controller.php';
include_once 'model/login_model.php';
include_once 'view/login_view.php';

class LoginController extends Controller {

  public function __construct() {
    $this->model = new LoginModel();
    $this->view = new LoginView();
  }

  public function panel(){
    $this->checkSesion();
    $this->view->mostrar($this->model->getProductos(),$this->model->getCategorias());
  }

  public function login() {
    if(isset($_POST["username"]) && isset($_POST["password"])){
      $email = $_POST["username"];
      $pass = $_POST["password"];
      $usuario = $this->model->getUsuario($email);
      if(password_verify($pass, $usuario['password'])){
        session_start();
        $_SESSION["email"] = $email;
        header("Location: index.php?action=panel");
        die();
      }
      else{
        $this->view->mostrarError("Usuario y password invalidos");
      }
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }
}

 ?>
