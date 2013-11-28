<?php
require_once "cliente.php";
$cliente = new cliente();
$cliente->setNombreUsuario(utf8_decode($_POST["nombreUsuario"]));
$cliente->setNombres(utf8_decode($_POST["apellido"]));
$cliente->setApellidos($_POST["telefono"]);
$cliente->set_celular($_POST["celular"]);
$cliente->set_fecha_nacimiento($_POST["fechaNacimiento"]);
$cliente->set_correo_electronico(utf8_decode($_POST["correo"]));
$cliente->set_ciudad_residencia(utf8_decode($_POST["ciudadResidencia"]));
$cliente->set_direccion(utf8_decode($_POST["direccion"]));
$cliente->set_barrio(utf8_decode($_POST["barrio"]));
$cliente->set_estado_civil(utf8_decode($_POST["estadoCivil"]));
$cliente->agregar_cliente();
?>
