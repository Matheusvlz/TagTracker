<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewProduct_Model.php';

session_start();
$obj = new NewProduct_Model();

if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] > 1)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}

$fornecedores = $obj->carregarBox($idempresa);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['caixa1']) && isset($_POST['caixa2'])) 
    {
        $produto = $_POST['caixa1'];
        $fornecedor = $_POST['caixa2'];
  

        $obj->criarProduto($produto, $fornecedor);
       
    } 
}

?>