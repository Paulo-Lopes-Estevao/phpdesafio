CREATE DATABASE `db_divida`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_unicode_ci;

use `db_divida`;


CREATE TABLE `db_divida`.`tb_devedor` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(70) NOT NULL,
    `cpf` VARCHAR(15) NOT NULL,
    `datanascimento` DATE NOT NULL,
    `endereco` VARCHAR(30) NOT NULL,
    `descricaotitulo` TEXT NOT NULL,
    `valor` DECIMAL(9, 2) NOT NULL,
    `datavencimento` DATE NOT NULL,
    `updated` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE `cpf` (`cpf`)
) ENGINE = InnoDB CHARSET = utf8 COLLATE utf8_unicode_ci;