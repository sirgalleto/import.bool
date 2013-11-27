<?
	include("clase_plantilla.php");
	$Contenido=new Plantilla("holaMundo");//Al pasar como parametro Prueba, asumimos que en la carpeta plantillas existe un archivo de nombre Prueba.tpl
	$Contenido->asigna_variables(array(
					"variable" => "Hola Mundo"
					));
	$ContenidoString = $Contenido->muestra();//$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, fácil no?
	echo $ContenidoString;
?>