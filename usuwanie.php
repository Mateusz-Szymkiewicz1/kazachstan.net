<html>
  <head>
      <title>Usuwanie sesji</title>
  </head>
  <body>
   <?php
    if(!isset($_SERVER['HTTP_REFERER'])){
    header('Location: index.php');
    exit;
}
?>
<?php
  session_start();
  session_destroy();
  header: 'Location: index.php';
    echo '<script>'.'window.location.replace("index.php");'.'</script>';
    exit;
?>
</body>
</html>