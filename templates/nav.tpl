<nav>
  <ul class="nav-justified">
    <li class="dropdown">
      <a href="" class="dropdown-toggle btnnav" data-toggle="dropdown" > <i class="fa fa-lg fa-user"></i></a>
      <div class="dropdown-menu">
        <form enctype="multipart/form-data" class="form container-fluid">
          <div class="form-group">
            <input class="form-control" name="username" id="username"  type="text" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
          </div>
          {if count($errores) gt 0}
            <div id='error' class="alert alert-danger" role="alert">
              {foreach $errores as $error}
                {$error}
                {/foreach}
            </div>
          {/if}
          <button type="submit" id="login" class="btn btn-block">Entrar</button>
        </form>
      </div>
    </li>
    <li class="logo"><img src="image/logo.png"/></li>
    <li><a href="#" class="btnnav" id="home">Home</a></li>
    <li><a href="#" class="btnnav" id="nosotros">Nosotros</a></li>
    <li><a href="#" class="btnnav" id="productos">Productos</a></li>
    <li><a href="#" class="btnnav" id="contacto">Contacto</a></li>
  </ul>
</nav>
