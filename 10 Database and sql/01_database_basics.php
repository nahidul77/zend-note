<?php

/**
 * 
 * Facts
PHP no longer ships with the MySQL extension, instead MySQLi is included.
The MySQLi extension makes some of MySQL’s more recent functionality available, things like prepared statements
There are two types of keys: primary key and foreign key
int or integer – Signed integer number, 32 bits in length.
smallint – Signed integer number, 16 bits in length.
real – Signed floating-point number, 32 bits in length.
float – Signed floating-point number, 64 bits in length.
char Fixed-length character string.
varchar Variable-length character string
datetime – store date time values (e.g. timestamp)
BLOB Binary Large OBject


Database Query

Create database: CREATE DATABASE db;
Must use database first
Create table: CREATE TABLE tbl ( id INT NOT NULL PRIMARY KEY, field1 VARCHAR(100), field2 CHAR(32) NOT NULL );
Drop table: DROP TABLE tbl;
Create index: CREATE INDEX idx ON tbl (id,field1);
Foreign key: CREATE TABLE tbl2 (isbn VARCHAR(13) REFERENCES book (id));  // one-to-many relationship
Count distinct: SELECT COUNT (DISTINCT id) FROM tbl;
Inner join (or just join): SELECT * FROM tab1 INNER JOIN tab2 ON tab1.id = tab2.eid
Outer join: all the tuples are added together
Left join / Right join: all tuple from left / right plus tuple from the right / left satisfying conditions, duplicates eliminated
Natural join: automatically join relations with at least 1 identical attributes, duplicates NOT eliminated
where age BETWEEN 20 AND 40
 */
