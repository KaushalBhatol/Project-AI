# SQL INFORMATION

* used mySql
* Data base connection file stored on partials/_dbconnnect.php
* created two table in __the-ai__ database
  * [feedback](#feedback)
  * [newsletter](#newsletter)

## feedback

* Table Name: feedback

Fieldname   | Datatype      | Size      | Constraint    | other
------------|---------------|-----------|---------------|------
sno         | INT           | 4         | Primary Key   | Auto increment
name        | VARCHAR       | 50        | NOT NULL      | NO
email       | VARCHAR       | 50        | NOT NULL      | NO
feedback    | TEXT          | 255       | NOT NULL      | NO
dt          | DATETIME      | NO        | NOT NULL      | CURRENT_TIME

SQL QUERRY:

```sql
CREATE TABLE `the-ai`.`feedback` ( `sno` INT(4) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `feedback` VARCHAR(255) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB;
```

```sql
CREATE TABLE `unaux_30884490_theai`.`feedback` ( `sno` INT(4) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `feedback` VARCHAR(255) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = MyISAM;
```

## newsletter

* Table Name: newsletter

Fieldname   | Datatype  | Size  | Constraint    | other
------------|-----------|-------|---------------|-------
email       | VARCHAR   | 23    | Primary Key   | NO
dt          | DATETIME  | NO    | NOT NULL      | CURRENT_TIME

SQL QUERRY:

```sql
CREATE TABLE `the-ai`.`newsletter` ( `email` VARCHAR(23) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`email`)) ENGINE = InnoDB;
```

```sql
CREATE TABLE `unaux_30884490_theai`.`newsletter` ( `email` VARCHAR(23) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`email`)) ENGINE = MyISAM;
```
