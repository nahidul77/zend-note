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


Query vs Execute
$pdoConnection->exec("INERT INTO … ); // returns the number of rows affected on success, after exec need to use fetch/fetchAll
$pdoConnection->query("SELECT * FROM … ); // returns the query result
Prepared statements
only values can be bound (not the column or table name)
only scalars can be bound (not array/object/NULL)
$query="SELECT * FROM posts WHERE topicID = :tid AND poster = :userid";
$statement=$pdoConnection->prepare($query);

$statement->execute(array(':tid'=>100,':userid'=>12));
$userAPosts=$statement->fetchAll();

OR

$query="SELECT * FROM posts WHERE topicID = ? AND poster = ?";
$statement=$pdoConnection->prepare($query);
$statement->bindParam(1,$name);
$statement->bindParam(2,$value);
$name='one';$value=1;
$statement->execute();
$userAPosts=$statement->fetchAll();
foreach($userAPosts as $key=>$value){…}
$statement->bindColumn($column,$parameter); // to be used after $statement->execute, by column name or number
$statement->bindParam($parameter,&$variable,$datatype);  // the variable is bound as a reference, datatype can be PDO::PARAM_INT, PDO::PARAM_STR, PDO::PARAM_BOOL, PDO::PARAM_NULL, etc.
$statement->bindValue($parameter,$value,$datatype); // bind values to parameters, $value can be string or variable name
$statement->closeCursor(); // frees up the connection to the server so that other SQL statements may be issued, but leaves the statement in a state that enables it to be executed again
$statement->columnCount(); // return the number of columns in the result set
$statement->rowCount(); // return the number of rows affected (not reliable for SELECT)
$statement->execute(); // execute the prepared statement, populate the placeholders if necessary e.g. $sth->execute( array(‘:calories’ => $calories, ‘:colour’ => $colour) );, use $statement->bindParam or $statement->bindValue
$statement->fetch($mode); // fetches the next row from a result set
PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
PDO::FETCH_BOTH (default): returns an array indexed by both column name and 0-indexed column number as returned in your result set
PDO::FETCH_BOUND: returns TRUE and assigns the values of the columns in your result set to the PHP variables to which they were bound with the PDOStatement::bindColumn() method
PDO::FETCH_CLASS: returns a new instance of the requested class, mapping the columns of the result set to named properties in the class. If fetch_style includes PDO::FETCH_CLASSTYPE (e.g. PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE) then the name of the class is determined from a value of the first column.
PDO::FETCH_INTO: updates an existing instance of the requested class, mapping the columns of the result set to named properties in the class
PDO::FETCH_LAZY: combines PDO::FETCH_BOTH and PDO::FETCH_OBJ, creating the object variable names as they are accessed
PDO::FETCH_NUM: returns an array indexed by column number as returned in your result set, starting at column 0
PDO::FETCH_OBJ: returns an anonymous object with property names that correspond to the column names returned in your result set
$statement->fetchAll($mode,$arg); // fetches all rows from a result set as an array
PDO::FETCH_COLUMN: fetch only 1 column (begin with 0)
PDO::FETCH_UNIQUE: fetch only unique values of a single column
PDO::FETCH_GROUP: an associative array grouped by the values of a specified column
$statement->fetchColumn($column_num); // returns a single column from the next row of a result set
$statement->fetchObject($class_name); // fetches the next row and returns it as an object
$statement->setFetchMode(); // set the default fetch mode
$statement->nextRowset();  // for databases that support stored procedures with multiple row sets returned
$statement->debugDumpParams();  // dumps the information of the prepared statement with the params
try {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbh->beginTransaction();
$dbh->exec("insert into staff (id, first, last) values (23, 'Joe', 'Bloggs')");
$dbh->exec("insert into salarychange (id, amount, changedate)
values (23, 50000, NOW())");
$dbh->commit();

} catch (Exception $e) {
$dbh->rollBack();
echo "Failed: " . $e->getMessage();
}
Error Handling
PDO::ERRMODE_SILENT default mode, PDO will set an error code which can be retrieved using PDO::errorCode() or PDO::errorInfo()
PDO::ERRMODE_WARNING in addition to the error code, an E_WARNING message will be emitted
PDO::ERRMODE_EXCEPTION an PDOException object will be throw (->getMessage() and ->getCode()), transactions are rollbacked automatically
when creating PDO connections, a PDOException will always be thrown if the connection fails regardless of which PDO::ATTR_ERRMODE is currently set
PDO::errorInfo()
0 – SQLSTATE error code (a five characters alphanumeric identifier defined in the ANSI SQL standard) same as PDO::errorCode()
1 – Driver-specific error code.
2 – Driver-specific error message.
try {
$dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
exit;
}
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
Handling Large Files
when storing or retrieving “large” data (>4kb) in the database (text or binary), use the PDO::PARAM_LOB type code in PDOStatement::bindParam() or PDOStatement::bindColumn() calls. PDO::PARAM_LOB tells PDO to map the data as a stream, so that you can manipulate it using the PHP Streams API.
$stmt = $db->prepare("select contenttype, imagedata from images where id=?");
$stmt->execute(array($_GET['id']));
$stmt->bindColumn(1, $type, PDO::PARAM_STR, 256);
$stmt->bindColumn(2, $lob, PDO::PARAM_LOB);
$stmt->fetch(PDO::FETCH_BOUND);
header("Content-Type: $type");
fpassthru($lob);

$stmt = $db->prepare("insert into images (contenttype, imagedata) values (?, ?)");
$fp = fopen($_FILES['file']['tmp_name'], 'rb');
$stmt->bindParam(1, $_FILES['file']['type']);
$stmt->bindParam(2, $fp, PDO::PARAM_LOB);
$stmt->execute();
SQLite
sqlite3 in PHP 5.3
is a database without the database => the data is written to a file
rather than using a separate program to persistently maintain the database, SQLite on the other hand requires the C libraries that comprise the DB to be built into whatever program would like to use them
was built into PHP by default as of PHP5
It’s fast, free, and has nice licensing terms
Apart from not needing to connect to a remote server or process, SQLite is no different from other database systems
catagorizes data into textual and numeric
 */
