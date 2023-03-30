<!DOCTYPE html>
<html>
<head>
	<title>Resultado del formulario</title>
</head>
<body>
	<h1>Recibir datos de un formulario</h1>
	<p>
<?php
if (($_REQUEST['usuario'])==''){
	echo"Debes escribir tu usuario ";

}else{
	$numeros = "/^[[:digit:]]+$/";
	if(preg_match($numeros,$_REQUEST["clave"])){
		echo"Clave correcta <b>".$_REQUEST['usuario'] ;

	}else{

		echo"Clave <b>".$_REQUEST['clave']."</b> es incorrecta
		para el usuario".$_REQUEST['usuario'] ;
	}
	
}
?>
</p>
<p> <a href="index.html">VOLVER</a></p>







	</p>

</body>
</html>
