CREATE DATABASE imagens_devmedia;
USE imagens_devmedia;
  CREATE TABLE IF NOT EXISTS `tabela_imagens` (
  `codigo` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `evento` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `nome_imagem` varchar(25) NOT NULL,
  `tamanho_imagem` varchar(25) NOT NULL,
  `tipo_imagem` varchar(25) NOT NULL,
  `imagem` longblob NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;