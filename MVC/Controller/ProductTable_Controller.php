<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewProduct_Model.php';
require '/var/www/html/projetoFinal4/MVC/Model/ProductTable_Model.php';
session_start();
$obj = new NewProduct_Model();
$obj2 = new ProductTable_Model();

if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] >= 1)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}

$fornecedores = $obj->carregarBox($idempresa);
$produtos = $obj2->carregarProduto($idempresa);
$tabela = $obj2->carregarTabela($idempresa);
$acao = $_POST['acao'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   switch($acao)
   {
    case "Editar Produto":
        $product1 = $_POST['caixa2'];
        $nvnome = $_POST['caixa3'];
        $nvfornecedor = $_POST['caixa4'];
     $obj2->editarProduto($product1, $idempresa, $nvnome, $nvfornecedor);
     header('Location: ../View/ProductTable_View.php');
    break;
    case "Apagar Produto":
        $product = $_POST['caixa1'];
      $obj2->deletarProduto($product, $idempresa);
      header('Location: ../View/ProductTable_View.php');
    break;
    default:
        
    break;
   }
}
       

?>