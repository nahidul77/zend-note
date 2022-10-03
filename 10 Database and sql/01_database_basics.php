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


Analyzing Queries
EXPLAIN EVERYTHING!
EXPLAIN SELECT * FROM 07_amazon_monitor_rank_results WHERE asin = '0672324547';
Prepared Statements
prepare the statement -> bind parameters -> execute
more secure as parameters do not need to be manually quoted
sqlite doesn’t allow prepared statements
Prepared statements are so useful that they are the only feature that PDO will emulate for drivers that don’t support them. This ensures that an application will be able to use the same data access paradigm regardless of the capabilities of the database.
Mysqli Extension
Procedural
<?php
$link = mysqli_connect("localhost", "username", "password", "database");
$city = "Montreal";
$stmt = mysqli_stmt_init($link);
if ($stmt = mysqli_stmt_prepare ($stmt, "SELECT Province FROM City WHERE Name=?"))
{
mysqli_stmt_bind_param($stmt, "s", $city);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $province);
mysqli_stmt_fetch($stmt);
printf("%s is in district %s\n", $city, $province);
mysqli_stmt_close($stmt);
}
mysqli_close($link);
OOP
<?php
$db = new mysqli("localhost", "username", "password", "database");
$city = "Montreal";
$stmt = $db->stmt_init();
if ($stmt->prepare ("SELECT Province FROM City WHERE Name=?"))
{
$stmt->bind_param($city);
$stmt->execute();
$stmt->bind_result($province);
$stmt->fetch();
printf("%s is in district %s\n", $city, $province);
$stmt->close();
}
$db->close();
Transactions
Merge multiple queries into one atomic operation, either they ALL execute successfully or not
Offer the benefits of Atomicity, Consistency, Isolation and Durability (ACID)
PDO (PHP Data Objects)
provides interface for accessing various databases
database specific PDO driver must also be installed
set the attributes: pdo.dsn.* in php.ini or PDO::setAttribute()
Connection and Disconnection
create a connection when connecting to the database
an exception is thrown when error occurs
try {
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
foreach($dbh->query('SELECT * from FOO') as $row) {
print_r($row);
}
$dbh = null;
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
$pdoConnection->setAttribute($attr,$value), $pdoConnection->getAttribute($attr), attributes are listed as follow:
PDO::ATTR_CASE: Force column names to a specific case.
PDO::CASE_LOWER: Force column names to lower case.
PDO::CASE_NATURAL: Leave column names as returned by the database driver.
PDO::CASE_UPPER: Force column names to upper case.
PDO::ATTR_ERRMODE: Error reporting.
PDO::ERRMODE_SILENT: Just set error codes.
PDO::ERRMODE_WARNING: Raise E_WARNING.
PDO::ERRMODE_EXCEPTION: Throw exceptions.
PDO::ATTR_ORACLE_NULLS (available with all drivers, not just Oracle): Conversion of NULL and empty strings.
PDO::NULL_NATURAL: No conversion.
PDO::NULL_EMPTY_STRING: Empty string is converted to NULL.
PDO::NULL_TO_STRING: NULL is converted to an empty string.
PDO::ATTR_STRINGIFY_FETCHES: Convert numeric values to strings when fetching. Requires bool.
PDO::ATTR_STATEMENT_CLASS: Set user-supplied statement class derived from PDOStatement. Cannot be used with persistent PDO instances. Requires array(string classname, array(mixed constructor_args)).
PDO::ATTR_TIMEOUT: Specifies the timeout duration in seconds. Not all drivers support this option, and it’s meaning may differ from driver to driver. For example, sqlite will wait for up to this time value before giving up on obtaining an writable lock, but other drivers may interpret this as a connect or a read timeout interval. Requires int.
PDO::ATTR_AUTOCOMMIT (available in OCI, Firebird and MySQL): Whether to autocommit every single statement.
PDO::ATTR_EMULATE_PREPARES Enables or disables emulation of prepared statements. Some drivers do not support native prepared statements or have limited support for them. Use this setting to force PDO to either always emulate prepared statements (if TRUE), or to try to use native prepared statements (if FALSE). It will always fall back to emulating the prepared statement if the driver cannot successfully prepare the current query. Requires bool.
PDO::MYSQL_ATTR_USE_BUFFERED_QUERY (available in MySQL): Use buffered queries.
PDO::ATTR_DEFAULT_FETCH_MODE: Set default fetch mode. Description of modes is available in PDOStatement::fetch() documentation.

 */
