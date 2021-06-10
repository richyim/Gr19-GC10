<?php
$dbms='mysql';     
$host='10.80.9.1'; 
$dbName='exampledb';    
$user='remote';      
$pass='C1sc0123'           
$dsn="$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass); 
    echo "Connected to Database<br/>";
    /* Can do more here */
    foreach ($dbh->query('SELECT * from example') as $row) {
        echo $row[0] "<br>" ;
    }
    $dbh->query('insert into example (first, second) values ("DNA Space", "Trigger")');
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
?>
