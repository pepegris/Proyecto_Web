<?php

 



 session_start();

$usuario=$_SESSION['username'];

if (!isset($usuario)) {
    header("location:../index.php");
}




 
?>


<a href="#" class="btn btn-dark" style="position: fixed;
    bottom: 90%;
    right: 10%;
    font-size:30px;" ><?=$usuario?></a>
