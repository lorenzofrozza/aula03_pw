<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];

$controller .= "controller";

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/controller/EstudanteController.php';

$objeto= new $controller();
$objeto->$metodo();
