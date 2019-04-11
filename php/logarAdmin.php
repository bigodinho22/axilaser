<?php
  session_start();

  $login = $_POST["login"];
  $senhaAdmin = $_POST["senhaAdmin"];

  include_once 'conexao.php';

   $query_select = "SELECT login, senha FROM admin WHERE login = '$login' AND senha = '$senhaAdmin'";

   $resultado = $conexao->query($query_select);

   if($resultado->num_rows > 0){
      $_SESSION["logadoAdmin"] = true;

      header('location:../indexAdmin.php');

   }else{
      unset($_SESSION["logadoAdmin"]);
      echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos.'); window.location.href='../index.php';</script>";
    }

?>