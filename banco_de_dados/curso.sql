-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema curso
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema curso
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `curso` DEFAULT CHARACTER SET utf8 ;
USE `curso` ;

-- -----------------------------------------------------
-- Table `curso`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(20) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curso`.`atividades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso`.`atividades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` TEXT NOT NULL,
  `data_postagem` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `questao_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_artigo_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_artigo_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `curso`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `curso`.`comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `curso`.`comentario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mensagem` VARCHAR(300) NOT NULL,
  `data_postagem` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `questao_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `atividades_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comentario_usuario1_idx` (`usuario_id` ASC),
  INDEX `fk_comentario_atividades1_idx` (`atividades_id` ASC),
  CONSTRAINT `fk_comentario_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `curso`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_atividades1`
    FOREIGN KEY (`atividades_id`)
    REFERENCES `curso`.`atividades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
