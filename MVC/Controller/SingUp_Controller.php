<?php

require '/var/www/html/projetoFinal4/MVC/Model/SingUp_Model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $obj = new SingUp_Model();

   $empresa = $_POST["caixa1"];
   $email = $_POST["caixa2"];
   $senha = $_POST["caixa3"];
   $repsenha = $_POST["caixa4"]; 
   $em_usuario = $_POST["caixa5"];
   $nm_usuario = $_POST["caixa6"];
   $sn_usuario = $senha; 
    
    if($senha === $repsenha)
    {
        $valor= $obj->novaEmpresa($empresa, $email, $senha, $sn_usuario, $nm_usuario, $em_usuario);
        if($valor <= 0 )
        {
            echo "Dados não Coincidem";
        }
        else
        {
            session_start();
            $iddaemp = $obj->setIdempresa($email);
            $_SESSION['user'] = $em_usuario;
            $_SESSION['nivel'] = $nivel = 3;
            $_SESSION['empresa'] = $iddaemp;
          
            header(header: 'Location: User_Home_View.php');
            exit(); 
            
        }
    }
    else
    {
       echo "senhas não coincidem";
    }
    
   
}


?>



