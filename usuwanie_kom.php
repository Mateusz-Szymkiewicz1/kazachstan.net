<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
    header('Location: index.php');
    exit;
}
?>
<?php
$host = 'localhost';
            $db_user = 'root';
            $db_password = '';
            $db_name = 'kazachstan';
            $polaczenie = @ new mysqli($host, $db_user, $db_password, $db_name);   
$id_kom = $_GET['id'];
$sql = "DELETE FROM komentarze WHERE id = $id_kom";
$rezultat = @$polaczenie->query($sql);
  header: 'Location: admin.php';
    echo '<script>'.'window.location.replace("admin.php");'.'</script>';
?>