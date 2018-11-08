  <?php
    //Requer arquivo de conexão com o bd
    require("conecta.php");
    //Campos do input 
    $nomeEvento = $_POST['nome_evento'];
    $descricaoEvento = $_POST['descricao_evento'];
    //Dados da imagem
    $nome = $_FILES['imagem']['name'];
    $tamanho = $_FILES['imagem']['size'];
    $tipo = $_FILES['imagem']['type'];
    $imagem = $_FILES['imagem']['tmp_name'];

    if ( $imagem != "none" ) {
        $fp = fopen($imagem, "rb");
        $conteudo = fread($fp, $tamanho);
        $conteudo = addslashes($conteudo);
        fclose($fp);
      
      //Definir query de inserção
      $queryInsercao = "INSERT INTO tabela_imagens (evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem) VALUES ('$nomeEvento', '$descricaoEvento','$nome','$tamanho', '$tipo','$conteudo')";

      //Inserir
      mysqli_query($conexao,$queryInsercao) or die("Algo deu errado ao inserir o registro. Tente novamente: " . mysqli_error($conexao));
      echo 'Registro inserido com sucesso!'; 
      header('Location: index.php');
      if(mysqli_affected_rows($conexao) > 0) {
        print "A imagem foi salva na base de dados.";
      }
      else {
        print "Não foi possível salvar a imagem na base de dados.";
      }
    }
    else {
      print "Não foi possível carregar a imagem.";
    }
?>