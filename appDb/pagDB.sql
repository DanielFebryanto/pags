-- MySQL Script generated by MySQL Workbench
-- 01/20/17 20:53:11
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pag
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pag
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pag` DEFAULT CHARACTER SET utf8 ;
USE `pag` ;

-- -----------------------------------------------------
-- Table `pag`.`statuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`statuses` ;

CREATE TABLE IF NOT EXISTS `pag`.`statuses` (
  `id` VARCHAR(50) NOT NULL,
  `statusname` VARCHAR(50) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`departements`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`departements` ;

CREATE TABLE IF NOT EXISTS `pag`.`departements` (
  `id` VARCHAR(50) NOT NULL,
  `departementname` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_departements_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_departements_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`positions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`positions` ;

CREATE TABLE IF NOT EXISTS `pag`.`positions` (
  `id` VARCHAR(50) NOT NULL,
  `departements_id` VARCHAR(50) NOT NULL,
  `positionname` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_positions_departements_idx` (`departements_id` ASC),
  CONSTRAINT `fk_positions_departements`
    FOREIGN KEY (`departements_id`)
    REFERENCES `pag`.`departements` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`employees` ;

CREATE TABLE IF NOT EXISTS `pag`.`employees` (
  `id` VARCHAR(50) NOT NULL,
  `positions_id` VARCHAR(50) NOT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  `fullname` VARCHAR(100) NULL,
  `email` VARCHAR(100) NULL,
  `dob` DATE NULL,
  `gender` VARCHAR(1) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_employees_positions1_idx` (`positions_id` ASC),
  INDEX `fk_employees_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_employees_positions1`
    FOREIGN KEY (`positions_id`)
    REFERENCES `pag`.`positions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employees_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`members`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`members` ;

CREATE TABLE IF NOT EXISTS `pag`.`members` (
  `id` VARCHAR(50) NOT NULL,
  `fullname` VARCHAR(100) NULL,
  `email` VARCHAR(45) NULL,
  `gender` VARCHAR(1) NULL,
  `dob` DATE NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  `activation` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL DEFAULT 'CURRENT_TIMESTAMP',
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_members_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_members_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`articletypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`articletypes` ;

CREATE TABLE IF NOT EXISTS `pag`.`articletypes` (
  `id` INT NOT NULL,
  `articletypename` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`categories` ;

CREATE TABLE IF NOT EXISTS `pag`.`categories` (
  `id` VARCHAR(50) NOT NULL,
  `categoryname` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_categories_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_categories_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`subcategories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`subcategories` ;

CREATE TABLE IF NOT EXISTS `pag`.`subcategories` (
  `id` VARCHAR(50) NOT NULL,
  `categories_id` VARCHAR(50) NOT NULL,
  `subcategoryname` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_subcategories_categories1_idx` (`categories_id` ASC),
  INDEX `fk_subcategories_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_subcategories_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `pag`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subcategories_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`users` ;

CREATE TABLE IF NOT EXISTS `pag`.`users` (
  `id` VARCHAR(50) NOT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  `uid` VARCHAR(50) NOT NULL,
  `password` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_users_employees1_idx` (`uid` ASC),
  INDEX `fk_users_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_users_employees1`
    FOREIGN KEY (`uid`)
    REFERENCES `pag`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_members`
    FOREIGN KEY (`uid`)
    REFERENCES `pag`.`members` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`articles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`articles` ;

CREATE TABLE IF NOT EXISTS `pag`.`articles` (
  `id` VARCHAR(50) NOT NULL,
  `articletypes_id` INT NOT NULL,
  `subcategories_id` VARCHAR(50) NOT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `title` VARCHAR(100) NULL,
  `body` TEXT NULL,
  `users_id` VARCHAR(50) NOT NULL,
  `tags` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_articles_articletypes1_idx` (`articletypes_id` ASC),
  INDEX `fk_articles_subcategories1_idx` (`subcategories_id` ASC),
  INDEX `fk_articles_statuses1_idx` (`statuses_id` ASC),
  INDEX `fk_articles_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_articles_articletypes1`
    FOREIGN KEY (`articletypes_id`)
    REFERENCES `pag`.`articletypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_subcategories1`
    FOREIGN KEY (`subcategories_id`)
    REFERENCES `pag`.`subcategories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `pag`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`comments` ;

CREATE TABLE IF NOT EXISTS `pag`.`comments` (
  `id` VARCHAR(50) NOT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `body` TEXT NULL,
  `commentscol` VARCHAR(45) NULL,
  `members_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comments_members1_idx` (`members_id` ASC),
  CONSTRAINT `fk_comments_members1`
    FOREIGN KEY (`members_id`)
    REFERENCES `pag`.`members` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`videos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`videos` ;

CREATE TABLE IF NOT EXISTS `pag`.`videos` (
  `id` VARCHAR(50) NOT NULL,
  `articles_id` VARCHAR(50) NOT NULL,
  `partners_id` VARCHAR(50) NOT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `vidurl` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_videos_articles1_idx` (`articles_id` ASC),
  CONSTRAINT `fk_videos_articles1`
    FOREIGN KEY (`articles_id`)
    REFERENCES `pag`.`articles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`notificationtypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`notificationtypes` ;

CREATE TABLE IF NOT EXISTS `pag`.`notificationtypes` (
  `id` INT NOT NULL,
  `notificationtypesname` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`notifications`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`notifications` ;

CREATE TABLE IF NOT EXISTS `pag`.`notifications` (
  `id` VARCHAR(50) NOT NULL,
  `notificationtypes_id` INT NOT NULL,
  `notifheader` VARCHAR(100) NULL,
  `notifbody` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_notifications_notificationtypes1_idx` (`notificationtypes_id` ASC),
  CONSTRAINT `fk_notifications_notificationtypes1`
    FOREIGN KEY (`notificationtypes_id`)
    REFERENCES `pag`.`notificationtypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`messages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`messages` ;

CREATE TABLE IF NOT EXISTS `pag`.`messages` (
  `id` VARCHAR(50) NOT NULL,
  `header` VARCHAR(45) NULL,
  `body` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `vto` VARCHAR(255) NULL,
  `employees_id` VARCHAR(50) NOT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_messages_employees1_idx` (`employees_id` ASC),
  INDEX `fk_messages_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_messages_employees1`
    FOREIGN KEY (`employees_id`)
    REFERENCES `pag`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`menus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`menus` ;

CREATE TABLE IF NOT EXISTS `pag`.`menus` (
  `id` VARCHAR(50) NOT NULL,
  `menuname` VARCHAR(45) NULL,
  `icon` VARCHAR(45) NULL,
  `description` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `iorder` INT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_menus_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_menus_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`roletypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`roletypes` ;

CREATE TABLE IF NOT EXISTS `pag`.`roletypes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `roletypename` VARCHAR(45) NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL,
  `version` INT NULL DEFAULT 0,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_roletypes_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_roletypes_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`userroles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`userroles` ;

CREATE TABLE IF NOT EXISTS `pag`.`userroles` (
  `id` VARCHAR(50) NOT NULL,
  `roletypes_id` INT NOT NULL,
  `statuses_id` VARCHAR(50) NOT NULL,
  `namarole` VARCHAR(50) NULL,
  `description` TEXT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `statuses_id1` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_roles_statuses1_idx` (`statuses_id` ASC),
  INDEX `fk_roles_roletypes1_idx` (`roletypes_id` ASC),
  INDEX `fk_userroles_statuses1_idx` (`statuses_id1` ASC),
  CONSTRAINT `fk_roles_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_roles_roletypes1`
    FOREIGN KEY (`roletypes_id`)
    REFERENCES `pag`.`roletypes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_userroles_statuses1`
    FOREIGN KEY (`statuses_id1`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`services`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`services` ;

CREATE TABLE IF NOT EXISTS `pag`.`services` (
  `id` VARCHAR(50) NOT NULL,
  `userroles_id` VARCHAR(50) NOT NULL,
  `vurl` VARCHAR(100) NULL,
  `servicename` VARCHAR(45) NULL,
  `menus_id` VARCHAR(50) NOT NULL,
  `url` VARCHAR(100) NULL,
  `createby` INT NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  `statuses_id` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_services_userroles1_idx` (`userroles_id` ASC),
  INDEX `fk_services_menus1_idx` (`menus_id` ASC),
  INDEX `fk_services_statuses1_idx` (`statuses_id` ASC),
  CONSTRAINT `fk_services_userroles1`
    FOREIGN KEY (`userroles_id`)
    REFERENCES `pag`.`userroles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_services_menus1`
    FOREIGN KEY (`menus_id`)
    REFERENCES `pag`.`menus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_services_statuses1`
    FOREIGN KEY (`statuses_id`)
    REFERENCES `pag`.`statuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pag`.`attachments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pag`.`attachments` ;

CREATE TABLE IF NOT EXISTS `pag`.`attachments` (
  `id` VARCHAR(50) NOT NULL,
  `messages_id` VARCHAR(50) NOT NULL,
  `createby` VARCHAR(45) NULL,
  `createon` DATETIME NULL,
  `modifby` VARCHAR(45) NULL,
  `modifon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `version` INT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `fk_attachments_messages1_idx` (`messages_id` ASC),
  CONSTRAINT `fk_attachments_messages1`
    FOREIGN KEY (`messages_id`)
    REFERENCES `pag`.`messages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
