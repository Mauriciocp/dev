SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `devsis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `devsis` ;

-- -----------------------------------------------------
-- Table `devsis`.`personas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `devsis`.`personas` (
  `idPersona` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NULL ,
  `apellido` VARCHAR(100) NULL ,
  `correoElectronico` VARCHAR(100) NULL ,
  PRIMARY KEY (`idPersona`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `devsis`.`suscripciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `devsis`.`suscripciones` (
  `idSuscripcion` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NULL ,
  `estado` INT NULL DEFAULT 0 ,
  PRIMARY KEY (`idSuscripcion`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `devsis`.`personaSuscripciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `devsis`.`personaSuscripciones` (
  `id` VARCHAR(45) NOT NULL ,
  `personas_idPersona` INT NOT NULL ,
  `suscripciones_idSuscripcion` INT NOT NULL ,
  INDEX `fk_personaSuscripciones_personas_idx` (`personas_idPersona` ASC) ,
  INDEX `fk_personaSuscripciones_suscripciones1_idx` (`suscripciones_idSuscripcion` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_personaSuscripciones_personas`
    FOREIGN KEY (`personas_idPersona` )
    REFERENCES `devsis`.`personas` (`idPersona` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_personaSuscripciones_suscripciones1`
    FOREIGN KEY (`suscripciones_idSuscripcion` )
    REFERENCES `devsis`.`suscripciones` (`idSuscripcion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
