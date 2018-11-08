<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "imagens_devmedia";

  //Conexão
  $conexao = mysqli_connect($servername,$username,$password,$dbname); 
      
  //Testa se conexão é nula
  if(!$conexao)
  {
    die('Não conectado : ' . mysqli_connect_error()());
  }
?>