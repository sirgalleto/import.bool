<?
	include("clase_plantilla.php");
	$Contenido=new Plantilla("holaMundo");//al Pasar como parametro Prueba, asumimos que en la carpeta 	plantillas existe un archivo de nombre Prueba.tpl
	$Contenido->asigna_variables(array(
					"variable" => "Hola Mundo"
					));
	$ContenidoString = $Contenido->muestra();//$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, f·cil no?
	echo $ContenidoString;
?>