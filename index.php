<?php

require_once("Config.php");

$sql = new Sql();
$usuario = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuario);