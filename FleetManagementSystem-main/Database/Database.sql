CREATE SCHEMA `management` ;

CREATE TABLE `management`.`users`

 (`id` INT NOT NULL ,
 `username` VARCHAR(100) NOT NULL ,
 `password` VARCHAR(100) NOT NULL ,

 PRIMARY KEY (`id`))
 ENGINE = InnoDB;

INSERT INTO `management`.`users`

 (`id`, `username`, `password`)
 VALUES ('1', 'Myuser', 'SA1@123');

CREATE TABLE `management`.`vehicle_registration` 

(`id` INT NOT NULL , `reg_num` VARCHAR(100) NOT NULL ,
 `make` VARCHAR(100) NOT NULL ,
 `model` VARCHAR(100) NOT NULL ,
 `tank_cap` VARCHAR(100) NOT NULL ,
 `prev_owner` VARCHAR(100) NOT NULL ,
 `branch` VARCHAR(100) NOT NULL ,
 `department` VARCHAR(100) NOT NULL ,
 `driver` VARCHAR(100) NOT NULL ,

 PRIMARY KEY (`id`))
 ENGINE = InnoDB;

ALTER TABLE `management`.`vehicle_registration` 
ADD COLUMN `write_off` VARCHAR(100) NOT NULL AFTER `driver`;

ALTER TABLE `management`.`vehicle_registration`  CHANGE `id` `id` INT NOT NULL AUTO_INCREMENT;