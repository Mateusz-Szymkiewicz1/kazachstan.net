<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
    header('Location: index.php');
    exit;
}
?>
<?php
require_once "connect.php";
$id_ob = $_GET['id'];
$sql = "DELETE FROM obywatele WHERE id = $id_ob";
$stmt = $db->prepare($sql);
$stmt->execute();
  header: 'Location: admin.php';
    echo '<script>'.'window.location.replace("admin.php");'.'</script>';
?>