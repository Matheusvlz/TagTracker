<?php

session_start();


session_unset();


session_destroy();


header('Location: ../View/Login_View.php');
exit();
?>