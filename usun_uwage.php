<?php
require_once "connect.php";  
$id_uwagi = $_GET['id'];
$sql = "DELETE FROM uwagi WHERE id = $id_uwagi";
$stmt = $db->prepare($sql);
$stmt->execute();
  header: 'Location: admin.php';
    echo '<script>'.'window.location.replace("admin.php");'.'</script>';
?>