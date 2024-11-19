<?php
require '/var/www/html/projetoFinal4/MVC/Model/OutputTable_Model.php';
session_start();
$obj = new OutputTable_Model();


if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] >= 1)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}


$uids = $obj->carregarUID($idempresa);
$tabela = $obj->carregarTabela($idempresa);
$acao = $_POST['acao'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $product = $_POST['caixa1'];
    $obj->deletarEntrada($product, $idempresa);
    header('Location: ../View/OutputTable_View.php');

}
       

?>