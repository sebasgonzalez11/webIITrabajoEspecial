<nav>
  <ul class="nav-justified">
    <!-- Single button -->
    <li class="dropdown">
      <a href="" class="dropdown-toggle btnnav" data-toggle="dropdown" > <i class="fa fa-lg fa-user"></i></a>
      <div class="dropdown-menu">
        <form action="index.php?action=formLogin" method="POST" class="form container-fluid">
          <div class="form-group">
            <input class="form-control" name="username" id="username"  type="text" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-block">Entrar</button>
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
