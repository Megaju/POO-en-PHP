-- MySQL Script generated by MySQL Workbench
-- mar. 02 mai 2017 17:22:10 CEST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tpblog
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tpblog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tpblog` DEFAULT CHARACTER SET utf8 ;
USE `tpblog` ;

-- -----------------------------------------------------
-- Table `tpblog`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tpblog`.`articles` (
  `id` INT NOT NULL,
  `title` VARCHAR(45) NULL,
  `content` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
