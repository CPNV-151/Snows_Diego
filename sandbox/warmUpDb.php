<?php

$dbConnector = null;
$dsn = "mysql:host=localhost;dbname=snows";
$usr = "ICT-151";
$pwd = "Passw0rd";
try {
    $dbConnector= new PDO($dsn, $usr, $pwd);


    $query = "SELECT * FROM snows";
    $queryResult = null;

    $statement = $dbConnector->prepare($query);
    $statement->execute();
    $queryResult = $statement->fetchAll();

    $dbConnexion = null;
    return$queryResult;
}
catch (PDOException $ex){
    print ($ex);
}