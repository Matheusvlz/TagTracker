<?php
session_start();
 $nivel;
if (isset($_SESSION['user']) && isset($_SESSION['empresa']) && isset($_SESSION['nivel']))
{
  $nivel = $_SESSION['nivel'];
}
else
{
    header('Location: Login_View.php');
    exit();
}

?>