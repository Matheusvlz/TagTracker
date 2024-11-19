<?php
require '/var/www/html/projetoFinal4/MVC/Model/Login_Model.php';
require_once '/var/www/html/projetoFinal4/MVC/Model/SingUp_Model.php';

$obj = new Login_Model();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = $_POST["caixa1"];
    $senha = $_POST["caixa2"];

    $booleano = $obj->validateLogin($email, $senha);
    if($booleano === true)
    {
        $id = $obj->setId($email);
        session_start();
        $nivel = $obj->setNivel($email);
        
        $_SESSION['user'] = $email;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['empresa'] = $id;
        header(header: 'Location: User_Home_View.php');
        exit(); 
        
    }

}


?>