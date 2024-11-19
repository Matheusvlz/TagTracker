<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewUser_Model.php';
session_start();
$obj = new NewUser_Model();
if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] > 2)
{
 
}
else
{
   header('Location: User_Home_View.php');
   exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

   
    if (isset($_POST['caixa1']) && isset($_POST['caixa2']) && isset($_POST['caixa3']) && isset($_POST['caixa4']) && isset($_POST['caixa5']) && isset($_POST['caixa6'])  ) 
    {
        $nome = $_POST['caixa1'];
        $user = $_POST['caixa2'];
        $email = $_POST['caixa3'];
        $senha = $_POST['caixa4'];
        $nivel = $_POST['caixa6'];
        $repsenha = $_POST['caixa5'];
        if($senha === $repsenha)
        {
            $obj->cadastrarUsuario($nome, $user, $email, $senha, $nivel);
        }
        else
        {
            echo "senhas não são iguais";
        }

       
    } 
   
    
   
}

?>