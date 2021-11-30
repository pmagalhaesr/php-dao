<?php 

require_once("config.php");


/* carrega usuário.
$root = new Usuario();
$root->loadById(9);
echo $root;
*/
/* carrega lista de usuario
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*Carrega lista de usuário buscando pelo login
$search = Usuario::search("te");
echo json_encode($search);*/

/*Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("arthur", "041021");
echo $usuario;*/

/* criando um novo usuario
$aluno = new Usuario("Arthur Magalhaes", "041021");
$aluno->insert();
echo $aluno;*/

$usuario = new Usuario();
$usuario->loadById(2);
$usuario->update("Arthur de Souza Magalhaes", "P@ul0");

echo $usuario;

 ?>