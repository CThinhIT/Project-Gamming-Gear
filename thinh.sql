CREATE TABLE `dbdemo1`.`staffs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `role` TINYINT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

ALTER TABLE
    `staffs`
ADD
    UNIQUE(`email`);