

Database:

MYSQL: Database Management System
SQL: Structure Query Language

Server (Local Server):
Xampp   (Apache:server, MYSQL:DBMS) -> Windows, Linux, Mac
Wampp   :Windows
Lamp    :LInux
Mamp    :Mac

SQL: 
DDL, DML, DQL, TCL, 

1. Create 
   1. Database 
    e.g:
    CREATE DATABASE `mydb`;
    2. Table
        e.g:
        CREATE TABLE `mytable`;

3. INSERT
    e.g:
    INSERT INTO `mytable` (
        `id` int AUTO_INCREMENT PRIMARY KEY,`field_name1` varchar(255),`field_name1` int,`field_name1` varchar(255)) 
        VALUES ('$variable', '$variable', '$variable', '$variable');

4. SELECT
   e.g:
   SELECT * FROM `mytable` WHERE Condition;
   SELECT name, email FROM `mytable` WHERE Condition;

5. UPDATE
    E.G.
    UPDATE `mytable` SET `field_name1` = '$variable', `field_name2` = '$variable' condition;

6. DELETE
    e.g. 
    DELETE FROM `mytable` WHERE Condition;

7. ALTER
    e.g.
    ALTER TABLE `mytable` ADD COLUMN `field_name` varchar(255) AFTER `field name`;

8. DROP
    e.g.
    DROP TABLE `mytable`;
    DROP DATABASE `database`;


#   p h p - t m s  
 