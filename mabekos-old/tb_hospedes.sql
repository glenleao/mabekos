


CREATE TABLE `hospedes`(
`idhospede` int(11) NOT NULL AUTO_INCREMENT,
`data_entrada` date NOT NULL,
`data_saida` date NOT NULL,
`nome_animal`varchar(64) NOT NULL,
`raca` varchar(124) NOT NULL,
`idade` smallint NOT NULL,
`sexo` varchar(5) NOT NULL,
`castrado` varchar(3) NOT NULL,
`nome_tutor` varchar (255) NOT NULL,
`cpf`int NOT NULL,
`telefone` smallint NOT NULL,
``
``
``
``
`dtcadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
PRIMARY KEY (`idhospede`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8