<?php
require_once "usuario.php";
$usuario = new usuario();
$usuario->set_nombre(utf8_decode($_POST["nombre"]));
$usuario->set_apellido(utf8_decode($_POST["apellido"]));
$usuario->set_telefono($_POST["telefono"]);
$usuario->set_celular($_POST["celular"]);
$usuario->set_fecha_nacimiento($_POST["fechaNacimiento"]);
$usuario->set_correo_electronico(utf8_decode($_POST["correo"]));
$usuario->set_ciudad_residencia(utf8_decode($_POST["ciudadResidencia"]));
$usuario->set_direccion(utf8_decode($_POST["direccion"]));
$usuario->set_barrio(utf8_decode($_POST["barrio"]));
$usuario->set_estado_civil(utf8_decode($_POST["estadoCivil"]));
$usuario->agregar_usuario();
?>
