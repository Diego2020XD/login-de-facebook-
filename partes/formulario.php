<?php

$user = $_POST["user"];
$password = $_POST["password"];

if (empty($user)) {
    echo "<p style='color:red;'>El correo electrónico o número de móvil que has introducido no está conectado a una cuenta.</p>"
} elseif (empty($password)) {
    echo "<p style='color:red;'>El correo electrónico o número de móvil que has introducido no está conectado a una cuenta.</p>"
}




?>