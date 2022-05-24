<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=kazachstan", "root", "");
}
catch(PDOException $e) {
    echo $e->getMessage() . " " . $e->getCode();
}
?>