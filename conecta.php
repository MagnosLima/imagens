<?php
  //Variavel de conexão com o server de bd, host, user, senha e bd
  $conexao = mysqli_connect("localhost","root","root","imagens_devmedia"); 
      
  //Se conexão não é nula
  if($conexao)
  {
    //Base de dados
    /*$baseSelecionada = mysqli_select_db("imagens_devmedia");
    if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysqli_error());
    }*/
  }
  else {
    die('Não conectado : ' . mysqli_error());
  }  
?>