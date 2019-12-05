
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Great+Vibes&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<header>
  <nav class="header_menu">
    <ul class="lista_titulo">
      <li class="titulo"><a href="home.php">Lagard</a></li>
    </ul>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button id="options" class="dropdown-item" type="button"  ><a href="login.php">INGRESA</button>
        <button id="options" class="dropdown-item" type="button"  ><a href="registroDeUsuarios">REGISTRATE</button>
        <button id="options" class="dropdown-item" type="button"><a href="home.php">VEHICULOS</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="#">NOSOTROS</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="#">COMPRA ACA</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="editarPerfil.php  ">AJUSTES</a></button>
        <button id="options" class="dropdown-item" type="button">style='display:none;'<a href="login.php">CERRAR SESION</a></button>
      </div>
    </div>
    <ul class="lista_menu">
      <li><a href="login.php"  >INGRESA</a></li>
      <li><a href="registroDeUsuarios.php" >REGISTRATE</a></li>
      <li><a href="home.php">VEHICULOS</a></li>
      <li><a href="">NOSOTROS</a></li>
      <div class="dropdown menuLogueado" style='display:none;' >
        <li class="dropbtn"  style='display:none;' >PERFIL
          <div class="dropdown-content">
            <a href="editarPerfil.php">Configurar</a>
        </div>
        </li>
      </div>
      <li><a href=""><img src="../img/carrito.png" alt="carro-de-compras"></a></li>
      <li><a href="editarPerfil.php"><img src="../img/settings.png" alt="configuracion"></a></li>
      <li id="logout" style='display:none;'>
        <form action="" method="post">
          <input type="submit" value="" name="inputDeslogueo" style="background: none;border: none;background-image: url(../img/logout.png);
                                                                       background-size: cover;margin: 0px;background-position: center;width: 30px;margin-top: 54%;">
        </form>
      </li>
    </ul>
  </nav>
</header>
    <body id="bodyLogin">
    <div class="container">    
    <div class="login-content-logo">
      <img class="userImg" src="../img/Lagard3.png" alt="">    
    </div>
        <div class="login-content-form">
        <form class="formLogin" action="" method="post">
        <h1>Sign In</h1>
        <div class="nombre">
           <img src="../img/user.svg" alt="" width="6%">
          <input   class="inputNombreLogin" type="text" name="user"  placeholder="Username">
          <span style="color:red;font-size:12px;display:block;"></span>
        </div>
        <div class="password">
          <img src="../img/lock.svg" alt="" width="6%">
          <input  class="inputPassLogin" type="password" name="password" value="" placeholder="Password"  >
          <span style="color:red;font-size:12px;display:block;"></span>
        </div>
        <span style="color:red;font-size:12px;"></span>
        <span style="color:red;font-size:12px;"></span>
        <div class="col-12 rememberMe">
            <label class="labelrememberMe"><input type="checkbox" id="cbox1" name="cbox1" value="first_checkbox"> Recordarme</label>
        </div>
             <input class="login" type="submit" name="" value="LOGIN">
        <div class="forgotPsw">
          <a href="#" class="col-8">¿Te olvidaste la contraseña?</a>
        </div>
        </form>
        
        
        </div>
          <div class="col-12 footerLogin">
                 ¿No tenés cuenta? <a href="registroDeUsuarios.php">  Registrarme</a>
          </div>
    </div>
      <footer>
  <div class="footer_info">
    <div class="empresa">
      <p><a href="#" class="nosotros_footer">Nosotros</a></p>
      <p><a href="#">Nuestras politicas</a></p>
      <p><a href="#">Feedback</a></p>
      <p><a href="#">Mapa del sitio</a></p>
      <p><a href="#">Politica de privacidad</a></p>
    </div>
    <div class="ayuda">
      <p><a href="#" class="ayuda_footer">Ayuda</a></p>
      <p><a href="#">Reservas y cancelaciones</a></p>
      <p><a href="#">Contactenos</a></p>
      <p><a href="preguntasFrecuentes.php">Preguntas frecuentes</a></p>
    </div>
    <div class="categoria">
      <p><a href="#" class="categoria_footer">Categorias</a></p>
      <p><a href="#">Autos</a></p>
      <p><a href="#">Pickups</a></p>
      <p><a href="#">Vans</a></p>
    </div>
    <div class="mpagos">
      <div>
      <p><a href="#" class="mpagos_footer">Métodos de pago</a></p>
      </div>
      <div class="tarjetas-1">
      <img src="../img/visa.png" alt="visa">
      <img src="../img/visa-e.png" alt="visa-electron">
      <img class="ultima-tarjeta" src="../img/amex.png" alt="amex">
      </div>
      <div class="tarjetas-2">
      <img src="../img/master.png" alt="master-card">
      <img src="../img/maestro.png" alt="maestro">
      <img class="ultima-tarjeta" src="../img/paypal.png" alt="paypal">
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>© Copyright 2019 Largard SRL. Todos los derechos reservados.</p>
  </div>
</footer>
  </body>
</html>