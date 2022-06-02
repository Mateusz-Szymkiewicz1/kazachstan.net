<?php
require_once "connect.php"; 
$id_kom = $_GET['id'];
$sql = "DELETE FROM komentarze WHERE id = $id_kom";
$stmt = $db->prepare($sql);
$stmt->execute();
  header: 'Location: admin.php';
    echo '<script>'.'window.location.replace("admin.php");'.'</script>';
?>