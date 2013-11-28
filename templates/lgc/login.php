<?php
$usuario = $_POST["usuario"];
$contraseña= $_POST["contraseña"];
$guardarSesion= $_POST["guardarSesion"];
$respuesta = array();
$sql=("SELECT nombreUsuario, nombres, apellidos FROM cliente WHERE nombreUsuario= '".$usuario."' and contraseña = '".$contraseña."'");


if($login = mysql_fetch_row($sql)){

    $nombreUsuario=$login[0];
    $nombres=$login[1];
    $apellidos=$login[1];
    $respuesta["nombreUsuario"]=$nombreUsuario;
    $respuesta["nombres"]=$nombre;
    $respuesta["apellidos"]=$apellidos;
  //  $nombreUsuario= mysql_result($login,0);

    /*if($guardarSesion == "si" ){
        setcookie("import.bool_nombreUsuario","$nombreUsuario",mktime(),);
    }
    else{
         setcookie("import.bool_nombreUsuario","$nombreUsuario",0,);
    }*/
}
else{
    $respuesta="Error"
}

echo json_encode($respuesta);

}
?>
