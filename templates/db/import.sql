SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `import` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `import` ;

-- -----------------------------------------------------
-- Table `import`.`departamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`departamento` ;

CREATE TABLE IF NOT EXISTS `import`.`departamento` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`cliente` ;

CREATE TABLE IF NOT EXISTS `import`.`cliente` (
  `nombreUsuario` VARCHAR(20) NOT NULL,
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `contraseña` BINARY NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `departamento_id` INT NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`nombreUsuario`),
  UNIQUE INDEX `id_UNIQUE` (`nombreUsuario` ASC),
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC),
  INDEX `fk_cliente_departamento1_idx` (`departamento_id` ASC),
  CONSTRAINT `fk_cliente_departamento1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `import`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`tipoAdministrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`tipoAdministrador` ;

CREATE TABLE IF NOT EXISTS `import`.`tipoAdministrador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`administrador` ;

CREATE TABLE IF NOT EXISTS `import`.`administrador` (
  `nombreUsuario` VARCHAR(20) NOT NULL,
  `contraseña` BINARY NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `tipoAdministrador_id` INT NOT NULL,
  PRIMARY KEY (`nombreUsuario`),
  INDEX `fk_administrador_tipoAdministrador_idx` (`tipoAdministrador_id` ASC),
  UNIQUE INDEX `id_UNIQUE` (`nombreUsuario` ASC),
  CONSTRAINT `fk_administrador_tipoAdministrador`
    FOREIGN KEY (`tipoAdministrador_id`)
    REFERENCES `import`.`tipoAdministrador` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`estado_pedido`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`estado_pedido` ;

CREATE TABLE IF NOT EXISTS `import`.`estado_pedido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estado` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`notificacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`notificacion` ;

CREATE TABLE IF NOT EXISTS `import`.`notificacion` (
  `id` VARCHAR(15) NOT NULL,
  `fecha` DATE NOT NULL,
  `mensaje` TEXT NULL,
  `estado` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`servicio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`servicio` ;

CREATE TABLE IF NOT EXISTS `import`.`servicio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pedido` VARCHAR(45) NOT NULL,
  `infoPedido` VARCHAR(45) NOT NULL,
  `precioArticulo` VARCHAR(45) NOT NULL,
  `precioServicio` VARCHAR(45) NOT NULL,
  `precioTotal` VARCHAR(45) NOT NULL,
  `fechaPedido` VARCHAR(45) NOT NULL,
  `fechaFinal` VARCHAR(45) NOT NULL,
  `otraInfo` VARCHAR(45) NULL,
  `cliente_id` VARCHAR(20) NOT NULL,
  `administrador_id` VARCHAR(20) NOT NULL,
  `estado_pedido_id` INT NOT NULL,
  `notificacion_id` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_servicio_cliente1_idx` (`cliente_id` ASC),
  INDEX `fk_servicio_administrador1_idx` (`administrador_id` ASC),
  INDEX `fk_servicio_estado_pedido1_idx` (`estado_pedido_id` ASC),
  INDEX `fk_servicio_notificacion1_idx` (`notificacion_id` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  CONSTRAINT `fk_servicio_cliente1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `import`.`cliente` (`nombreUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_administrador1`
    FOREIGN KEY (`administrador_id`)
    REFERENCES `import`.`administrador` (`nombreUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_estado_pedido1`
    FOREIGN KEY (`estado_pedido_id`)
    REFERENCES `import`.`estado_pedido` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_notificacion1`
    FOREIGN KEY (`notificacion_id`)
    REFERENCES `import`.`notificacion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`ticket`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`ticket` ;

CREATE TABLE IF NOT EXISTS `import`.`ticket` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `asunto` VARCHAR(45) NOT NULL,
  `estado` TINYINT(1) NOT NULL,
  `fechaInicio` VARCHAR(45) NOT NULL,
  `fechaFinal` VARCHAR(45) NOT NULL,
  `cliente_nombreUsuario` VARCHAR(20) NOT NULL,
  `administrador_nombreUsuario` VARCHAR(20) NULL,
  `servicio_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_ticket_cliente1_idx` (`cliente_nombreUsuario` ASC),
  INDEX `fk_ticket_administrador1_idx` (`administrador_nombreUsuario` ASC),
  INDEX `fk_ticket_servicio1_idx` (`servicio_id` ASC),
  CONSTRAINT `fk_ticket_cliente1`
    FOREIGN KEY (`cliente_nombreUsuario`)
    REFERENCES `import`.`cliente` (`nombreUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_administrador1`
    FOREIGN KEY (`administrador_nombreUsuario`)
    REFERENCES `import`.`administrador` (`nombreUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_servicio1`
    FOREIGN KEY (`servicio_id`)
    REFERENCES `import`.`servicio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`mensaje`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`mensaje` ;

CREATE TABLE IF NOT EXISTS `import`.`mensaje` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fechaEnvio` VARCHAR(45) NOT NULL,
  `estado` TINYINT(1) NULL,
  `mensaje` VARCHAR(45) NOT NULL,
  `respuesta` LONGTEXT NOT NULL,
  `ticket_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mensaje_ticket1_idx` (`ticket_id` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  CONSTRAINT `fk_mensaje_ticket1`
    FOREIGN KEY (`ticket_id`)
    REFERENCES `import`.`ticket` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `import`.`municipio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `import`.`municipio` ;

CREATE TABLE IF NOT EXISTS `import`.`municipio` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `departamento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_municipio_departamento1_idx` (`departamento_id` ASC),
  CONSTRAINT `fk_municipio_departamento1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `import`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
