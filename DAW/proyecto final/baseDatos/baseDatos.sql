-- -----------------------------------------------------
-- Schema id19687811_inmobiliariabd
-- -----------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `id19687811_inmobiliariabd` DEFAULT CHARACTER SET utf8 ;
USE `id19687811_inmobiliariabd` ;
-- -----------------------------------------------------
-- Table `id19687811_inmobiliariabd`.`propietario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id19687811_inmobiliariabd`.`propietario` (
  `dnipropietario` VARCHAR(9) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `numerocontacto` INT(9) NOT NULL,
  PRIMARY KEY (`dnipropietario`))
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `id19687811_inmobiliariabd`.`hogar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `id19687811_inmobiliariabd`.`hogar` (
  `idhogar` INT NOT NULL AUTO_INCREMENT,
  `precio` FLOAT(20) NOT NULL,
  `metros` FLOAT(9) NOT NULL,
  `habitaciones` INT(50) NOT NULL,
  `fechaconstruccion` DATE NOT NULL,
  `amueblado` VARCHAR(2) NOT NULL,
  `imagen` VARCHAR (99) NOT NULL,
  `propietario_dnipropietario` VARCHAR(9) NOT NULL,
  PRIMARY KEY (`idhogar`),
  INDEX `fk_hogar_propietario_idx` (`propietario_dnipropietario` ASC) VISIBLE,
  CONSTRAINT `fk_hogar_propietario`
    FOREIGN KEY (`propietario_dnipropietario`)
    REFERENCES `id19687811_inmobiliariabd`.`propietario` (`dnipropietario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
