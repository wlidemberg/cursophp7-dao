<?php
require_once ("Config.php");

$root = new Usuario();
$root->loadById(3);
echo $root;
