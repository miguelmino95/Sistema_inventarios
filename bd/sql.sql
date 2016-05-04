-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bdinventarios7
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bdinventarios7
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bdinventarios7` DEFAULT CHARACTER SET utf8 ;
USE `bdinventarios7` ;

-- -----------------------------------------------------
-- Table `bdinventarios7`.`activos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`activos` (
  `idactivos` INT(11) NOT NULL,
  `nombre_act` VARCHAR(45) NULL DEFAULT NULL,
  `marca_act` VARCHAR(45) NULL DEFAULT NULL,
  `modelo_act` VARCHAR(45) NULL DEFAULT NULL,
  `serie_act` VARCHAR(45) NULL,
  `numfactura_act` VARCHAR(45) NULL DEFAULT NULL,
  `estado_act` VARCHAR(45) NULL,
  `detalles_act` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idactivos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`areas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`areas` (
  `idareas` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_a` VARCHAR(45) NOT NULL,
  `detalles_a` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idareas`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8
COMMENT = 'areas de trabajo itsae';


-- -----------------------------------------------------
-- Table `bdinventarios7`.`departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`departamentos` (
  `iddepart` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_d` VARCHAR(45) NULL DEFAULT NULL,
  `detalles_d` VARCHAR(45) NULL DEFAULT NULL,
  `estado_d` VARCHAR(45) NULL,
  `areas_idareas` INT(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iddepart`, `areas_idareas`),
  INDEX `fk_departamentos_areas_idx` (`areas_idareas` ASC),
  CONSTRAINT `fk_departamentos_areas`
    FOREIGN KEY (`areas_idareas`)
    REFERENCES `bdinventarios7`.`areas` (`idareas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 39
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`personal` (
  `idpersonal` INT(11) NOT NULL AUTO_INCREMENT,
  `pnombre_p` VARCHAR(60) NULL DEFAULT NULL,
  `snombre_p` VARCHAR(60) NULL DEFAULT NULL,
  `apaterno_p` VARCHAR(60) NULL DEFAULT NULL,
  `amaterno_p` VARCHAR(60) NULL DEFAULT NULL,
  `dni_p` VARCHAR(15) NULL DEFAULT NULL,
  `cargo_p` VARCHAR(45) NULL DEFAULT NULL,
  `telefono_p` INT(11) NULL DEFAULT NULL,
  `direccion_p` VARCHAR(60) NULL DEFAULT NULL,
  `estado_p` VARCHAR(45) NULL,
  PRIMARY KEY (`idpersonal`),
  UNIQUE INDEX `dni_p_UNIQUE` (`dni_p` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`mantenimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`mantenimiento` (
  `idmantenimiento` INT(11) NOT NULL,
  `detalle_m` VARCHAR(200) NULL DEFAULT NULL,
  `fecha_m` DATE NULL DEFAULT NULL,
  `activos_idactivos` INT(11) NOT NULL,
  `personal_idpersonal` INT(11) NOT NULL,
  PRIMARY KEY (`idmantenimiento`, `activos_idactivos`, `personal_idpersonal`),
  INDEX `fk_mantenimiento_activos1_idx` (`activos_idactivos` ASC),
  INDEX `fk_mantenimiento_personal1_idx` (`personal_idpersonal` ASC),
  CONSTRAINT `fk_mantenimiento_activos1`
    FOREIGN KEY (`activos_idactivos`)
    REFERENCES `bdinventarios7`.`activos` (`idactivos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mantenimiento_personal1`
    FOREIGN KEY (`personal_idpersonal`)
    REFERENCES `bdinventarios7`.`personal` (`idpersonal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`registro_ingreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`registro_ingreso` (
  `idregistro_ingreso` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_reg` VARCHAR(45) NULL DEFAULT NULL,
  `marca_reg` VARCHAR(45) NULL DEFAULT NULL,
  `modelo_reg` VARCHAR(45) NULL DEFAULT NULL,
  `numfactura_reg` VARCHAR(45) NULL DEFAULT NULL,
  `responsable_reg` VARCHAR(45) NULL DEFAULT NULL,
  `telefono__p_reg` VARCHAR(45) NULL DEFAULT NULL,
  `dni__p_reg` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_reg` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idregistro_ingreso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`responsable`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`responsable` (
  `idresponsable` INT(11) NOT NULL,
  `detalles_res` VARCHAR(45) NULL DEFAULT NULL,
  `personal_idpersonal` INT(11) NOT NULL,
  `departamentos_iddepart` INT(11) NOT NULL,
  `activos_idactivos` INT(11) NOT NULL,
  PRIMARY KEY (`idresponsable`, `personal_idpersonal`, `departamentos_iddepart`, `activos_idactivos`),
  INDEX `fk_responsable_personal1_idx` (`personal_idpersonal` ASC),
  INDEX `fk_responsable_departamentos1_idx` (`departamentos_iddepart` ASC),
  INDEX `fk_responsable_activos1_idx` (`activos_idactivos` ASC),
  CONSTRAINT `fk_responsable_departamentos1`
    FOREIGN KEY (`departamentos_iddepart`)
    REFERENCES `bdinventarios7`.`departamentos` (`iddepart`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_personal1`
    FOREIGN KEY (`personal_idpersonal`)
    REFERENCES `bdinventarios7`.`personal` (`idpersonal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_activos1`
    FOREIGN KEY (`activos_idactivos`)
    REFERENCES `bdinventarios7`.`activos` (`idactivos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`usuarios` (
  `idusuarios` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` VARCHAR(45) NULL DEFAULT NULL,
  `clave_u` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_u` VARCHAR(45) NULL DEFAULT NULL,
  `estado_u` VARCHAR(45) NULL,
  `tipo_u` VARCHAR(45) NULL,
  `detalles_u` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;



-- -----------------------------------------------------
-- Table `bdinventarios7`.`tranferencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`tranferencias` (
  `idtranferencias` INT NOT NULL AUTO_INCREMENT,
  `detalles_trans` VARCHAR(200) NOT NULL,
  `fecha_trans` DATE NOT NULL,
  `activos_idactivos` INT(11) NOT NULL,
  `depart_ant_trans` VARCHAR(45) NULL COMMENT 'departamento de procedencia',
  `departamentos_iddepart` INT(11) NOT NULL,
  `personal_idpersonal` INT(11) NOT NULL,
  PRIMARY KEY (`idtranferencias`, `activos_idactivos`, `departamentos_iddepart`, `personal_idpersonal`),
  INDEX `fk_tranferencias_activos1_idx` (`activos_idactivos` ASC),
  INDEX `fk_tranferencias_departamentos1_idx` (`departamentos_iddepart` ASC),
  INDEX `fk_tranferencias_personal1_idx` (`personal_idpersonal` ASC),
  CONSTRAINT `fk_tranferencias_activos1`
    FOREIGN KEY (`activos_idactivos`)
    REFERENCES `bdinventarios7`.`activos` (`idactivos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tranferencias_departamentos1`
    FOREIGN KEY (`departamentos_iddepart`)
    REFERENCES `bdinventarios7`.`departamentos` (`iddepart`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tranferencias_personal1`
    FOREIGN KEY (`personal_idpersonal`)
    REFERENCES `bdinventarios7`.`personal` (`idpersonal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdinventarios7`.`activos_de_baja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdinventarios7`.`activos_de_baja` (
  `idactivos_de_baja` INT NOT NULL,
  `nombre_act_b` VARCHAR(45) NULL,
  `marca_act_b` VARCHAR(45) NULL,
  `modelo_act_b` VARCHAR(45) NULL,
  `serie_act_b` VARCHAR(45) NULL,
  `numfactura_act_b` VARCHAR(45) NULL,
  `detalles_act_b` VARCHAR(45) NULL,
  PRIMARY KEY (`idactivos_de_baja`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
