# Project-AI

* hello world abc

## SQL INFORMARION

### feedback

Fieldname   | Datatype      | Size      | Constraint    | other
------------|---------------|-----------|---------------|------
sno         | INT           | 4         | Primary Key   | auto increment
name        | VARCHAR       | 50        | NOT NULL      | NO
email       | VARCHAR       | 50        | Not Null      | NO
feedback    | TEXT          | 255       | Not Null      | NO
dt          | DATETIME      | NO        | CURRENT_TIME  | NO

SQL QUERRY:

```sql
CREATE TABLE `the-ai`.`feedback` ( `sno` INT(4) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `feedback` VARCHAR(255) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB;
```

### newsletter

Fieldname   | Datatype  | Size  | Constraint    | other
------------|-----------|-------|---------------|-------
email       | VARCHAR   | 23    | Primary Key   | NO
dt          | DATETIME  | NO    | NOT NULL      | CURRENT_TIME

```sql
CREATE TABLE `the-ai`.`newsletter` ( `email` VARCHAR(23) NOT NULL , `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`email`)) ENGINE = InnoDB;
```
