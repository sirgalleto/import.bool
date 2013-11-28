<?
	include("clase_plantilla.php");

	$Contenido=new Plantilla("template");//al Pasar como parametro Prueba, asumimos que en la carpeta 	plantillas existe un archivo de nombre Prueba.tpl
	$Contenido->asigna_variables(array(
                    "titulo" => "Inicio",
					"miVariable" => "Hola Mundo"
				));
	$ContenidoString = $Contenido->muestra();//$ContenidoString contiene nuestra plantilla, ya con las variables asignadas, f·cil no?
	echo $ContenidoString;
?>
