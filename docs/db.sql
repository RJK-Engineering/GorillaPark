-- MySQL Script generated by MySQL Workbench
-- Sat Jan  6 17:41:05 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gorillapark
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gorillapark
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gorillapark` DEFAULT CHARACTER SET utf8 ;
USE `gorillapark` ;

-- -----------------------------------------------------
-- Table `gorillapark`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gorillapark`.`User` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `password` VARCHAR(45) NULL,
  `role` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gorillapark`.`Configuration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gorillapark`.`Configuration` (
  `option` VARCHAR(45) NOT NULL,
  `value` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`option`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gorillapark`.`AccessLog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gorillapark`.`AccessLog` (
  `username` VARCHAR(255) NOT NULL,
  `action` VARCHAR(45) NOT NULL,
  `date` DATETIME NOT NULL,
  CONSTRAINT `fk_AccessLog_User`
    FOREIGN KEY (`username`)
    REFERENCES `gorillapark`.`User` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
