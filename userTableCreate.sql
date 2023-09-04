CREATE TABLE `login_again`.`user` (
`id` INT NOT NULL AUTO_INCREMENT ,
`nome` VARCHAR(100) NOT NULL ,
`email` VARCHAR(100) NOT NULL ,
`usuario` VARCHAR(100) NOT NULL ,
`senha` VARCHAR(100) NOT NULL ,
PRIMARY KEY (`id`),
UNIQUE (`usuario`),
UNIQUE (`email`))
ENGINE = InnoDB;