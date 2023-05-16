<?php
//connect with pdo
$dbhost = "mariadb";
$dbname = "testdatabase";
$user = "root";
$pass = "a3b6c9";
try {
    $database = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
    echo "Connect with database";
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>