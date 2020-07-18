DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `contato_idx` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `mensagem` longtext DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contato_idx`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
