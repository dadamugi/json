<?php

$datos = array(
	"nombre"=> $_POST['nombre'],
	"apellido"=> $_POST['apellido'],
	"correo"=> $_POST['correo'],
	"telefono"=> $_POST['telefono']
);

$archivo=fopen($_POST['cedula'].".dat", "a");

fwrite($archivo, json_encode($datos)); 

fclose($archivo);

?>