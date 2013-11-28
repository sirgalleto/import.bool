<?php
$usuario = $_POST["usuario"];
$contraseña= $_POST["contraseña"];
$sql=("SELECT nombreUsuario FROM cliente WHERE nombreUsuario= '".$usuario."' and contraseña = '".$contraseña."'");
$login = mysql_query($sql);
if(mysql_num_rows($login) > 0){
    $nombreUsuario= mysql_result($login,0);
    setcookie("import.bool_nombreUsuario","$nombreUsuario");
}
?>