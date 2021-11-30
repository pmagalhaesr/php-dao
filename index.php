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

/*Carrega um usuario usando login e senha*/

$usuario = new Usuario();
$usuario->login("teste", "12345");

echo $usuario;
 ?>