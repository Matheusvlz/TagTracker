<?php
require '/var/www/html/projetoFinal4/MVC/Model/NewSupplier_Model.php';

session_start();
 $nivel;
if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']) && $_SESSION['nivel'] > 1)
{
  
}
else
{
    header('Location: User_Home_View.php');
    exit();
}
$forn = new NewSupplier_Model();



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

   
    if (isset($_POST['caixa1']) && isset($_POST['caixa2']) && isset($_POST['caixa3']) && isset($_POST['caixa4'])  ) 
    {
        $nome = $_POST['caixa1'];
        $endereco = $_POST['caixa2'];
        $email = $_POST['caixa3'];
        $cnpj = $_POST['caixa4'];

        $forn->addSupplier($nome, $endereco, $email, $cnpj);
       
    } 
   
    
   
}



?>