<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewProduct_Model.php';
require '/var/www/html/projetoFinal4/MVC/Model/SupplierTable_Model.php';
session_start();
$obj = new NewProduct_Model();
$obj2 = new SupplierTable_Model();

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

$tabela = $obj2->carregarTabela($idempresa);
$acao = $_POST['acao'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   switch($acao)
   {
    case "Editar Fornecedor":
    $nome = $_POST['caixa2'];
    $nvnome = $_POST['caixa3'];
    $endereco = $_POST['caixa4'];
    $nvemail = $_POST['caixa5'];

    $obj2->editarFornecedor($nome, $idempresa, $nvnome, $endereco, $nvemail);
     header('Location: ../View/SupplierTable_View.php');
    break;
    case "Apagar Fornecedor":
        $nome = $_POST['caixa1'];
     $obj2->deletarFornecedor($nome, $idempresa);
      header('Location: ../View/SupplierTable_View.php');
    break;
    default:
        
    break;
   }
}
       

?>