<?

include("clase_plantilla.php");

$Contenido=new Plantilla("template");//al Pasar como parametro Prueba, asumimos que en la carpeta 	plantillas existe un archivo de nombre Prueba.tpl

$Formulario = new Plantilla("registroUsuario");
$Formulario->asigna_variables(array(
));
$contenidoFormulario= $Formulario->muestra();

    $string ="hola";
$Contenido->asigna_variables(array(
    "miVariable" => $contenidoFormulario
));
$ContenidoString = $Contenido->muestra();//$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, f·cil no?
echo $ContenidoString;
?>
