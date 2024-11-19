<?php
require '/var/www/html/projetoFinal4/MVC/Model/ProductTable_Model.php';
require '/var/www/html/projetoFinal4/MVC/Model/NewInput_Model.php';
session_start();

$obj2 = new ProductTable_Model();
$obj = new NewInput_Model();
if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] >= 1)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}
$produtos = $obj2->carregarProduto($idempresa);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 $produto =$_POST['caixa1'];
 
 $obj->registrarEntrada($produto, $idempresa);

} 



?>