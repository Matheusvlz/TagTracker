<?php
require '/var/www/html/projetoFinal4/MVC/Model/UserTable_Model.php';


session_start();
$obj = new UserTable_Model();

if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] > 2)
{
    $idempresa = $_SESSION['empresa'];
}
else
{
    header('Location: User_Home_View.php');
    exit();
}

$usuarios = $obj->carregarUsuarios($idempresa);

$tabela = $obj->carregarTabela($idempresa);
$acao = $_POST['acao'];
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   switch($acao)
   {
    case "Editar Usuário":
    $user = $_POST['caixa2'];
    $senha = $_POST['caixa3'];
    $repsenha = $_POST['caixa4'];
    $nivel = $_POST['caixa5'];

   if($senha === $repsenha)
   {
    $obj->editarUsuario($user, $idempresa, $senha, $nivel);

    header('Location: ../View/UserTable_View.php');
   }
   else
   {
    echo "senhas não são iguais";
   }
   

    
    break;
    case "Apagar Usuário":
        $user = $_POST['caixa1'];

        $obj->deletarUsuario($user, $idempresa);

        header('Location: ../View/UserTable_View.php');
    break;
    default:
        
    break;
   }
}
       

?>