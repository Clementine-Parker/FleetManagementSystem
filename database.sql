CREATE TABLE `fms`.`users`

 (`id` INT NOT NULL ,
 `username` VARCHAR(100) NOT NULL ,
 `password` VARCHAR(100) NOT NULL ,

 PRIMARY KEY (`id`))
 ENGINE = InnoDB;

INSERT INTO `fms`.`users`

 (`id`, `username`, `password`)
 VALUES ('1', 'Myuser', 'SA1@123')

CREATE TABLE `fms`.`vehicle_registration` 

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