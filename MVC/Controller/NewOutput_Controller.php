<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewOutput_Model.php';

session_start();

$obj = new NewOutput_Model();
if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] >= 1)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 $produto = "null/nulo";
 
 $obj->registrarSaida($produto, $idempresa);

} 



?>