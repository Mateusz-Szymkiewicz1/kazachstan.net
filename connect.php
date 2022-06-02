<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=kazachstan", "root", "",array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));
}
catch(PDOException $e) {
    echo $e->getMessage() . " " . $e->getCode();
}
?>