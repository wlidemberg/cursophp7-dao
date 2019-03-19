<?php
require_once ("Config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega um lista de usuários buscando pelo login
//$search = Usuario::search("b");
//echo json_encode($search);

//Carrega  um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("berg", "wl150680");
//echo $usuario;

//INSERT USUARIO COM STORED PROCEDURE
//$aluno = new Usuario("alunoA", "150680");
//$aluno->insert();
//echo $aluno;

//UPDATE
//$usuario = new Usuario();
//$usuario->loadById(6);
//$usuario->update("professor", "fessor");
//echo $usuario;

//DELETE
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;
