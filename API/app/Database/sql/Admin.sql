CREATE TABLE `HovesAdmin`.`Companies` (
    `CompanyName` TEXT NOT NULL ,
    `DBName` TEXT NOT NULL ,
    `Adate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `ID` TEXT NOT NULL ,
    `RID` INT NOT NULL AUTO_INCREMENT ,
    PRIMARY KEY (`RID`)
) ENGINE = InnoDB;

CREATE TABLE `HovesAdmin`.`Users` (
    `CompaniesID` TEXT NOT NULL ,
    `UserEmail` TEXT NOT NULL ,
    `UserPassword` TEXT NOT NULL ,
    `ProfileImgUrl` TEXT DEFAULT NULL,
    `ListDisplayPref` JSON DEFAULT NULL,
    `Adate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `ID` TEXT NOT NULL , 
    `RID` INT NOT NULL AUTO_INCREMENT ,
    PRIMARY KEY (`RID`)
) ENGINE = InnoDB;

CREATE TABLE `HovesAdmin`.`LoginAuth` (
    `Token` TEXT NOT NULL ,
    `Expire` TIMESTAMP NOT NULL ,
    `UsersID` TEXT NOT NULL ,
    `CompaniesID` TEXT NOT NULL ,
    `IP` TEXT NOT NULL ,
    `Adate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `ID` INT NOT NULL AUTO_INCREMENT ,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;


CREATE TABLE `HovesAdmin`.`CompCreateAuth` (
    `Token` TEXT NOT NULL ,
    `Expire` TIMESTAMP NOT NULL ,
    `Adate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `ID` INT NOT NULL AUTO_INCREMENT ,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;