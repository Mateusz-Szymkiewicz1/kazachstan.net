<?php
$id = $_GET['id'] ?? null;
require_once "connect.php";  
		$sql_0 = "SELECT id FROM obywatele ORDER BY id DESC";
		$stmt = $db->prepare($sql_0);
            $stmt->execute();
    $row_0 = $stmt->fetch(PDO::FETCH_ASSOC);
if($id < 1 or $id > $row_0['id']){
    echo '<script type="text/javascript">document.location = "index.php"; </script>';
}
$tresc = $_POST['kom'] ?? null;
// DODANIE KOMENTARZA
if($tresc != null and strlen($tresc) > 5){
      if(!empty($_POST['g-recaptcha-response'])){
        $secret = '6Lei1pUdAAAAAPPmDOFgJZZHVepP1w7fiYY_QrLz';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
if(preg_match('/^[A-Za-z ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ][A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/', $tresc)){
		$sql_komentarz = "INSERT INTO komentarze(ob_id, tresc, data) VALUES('$id', '$tresc', now());";
		$stmt = $db->prepare($sql_komentarz);
            $stmt->execute();
    header: 'Location: index.php';
    echo '<script type="text/javascript">document.location = "index.php"; </script>';
}
else{
    echo '<div class="window" id="window6" style="width: 300px">
  <div class="title-bar">
    <div class="title-bar-text">Błąd<i class="icon-attention"></i></div>
    <div class="title-bar-controls">
      <button aria-label="Minimize" onclick="error_close()"></button>
      <button aria-label="Maximize"></button>
      <button aria-label="Close" onclick="error_close()"></button>
    </div>
  </div>
  <div class="window-body">
    <form>
      <h2 class="h2-error">Error: umiesc w komentarzu jedynie litery lub cyfry</h2>
    </form>
  </div>
</div>';
}
      }
else{
     echo '<div class="window" id="window6" style="width: 300px">
  <div class="title-bar">
    <div class="title-bar-text">Błąd<i class="icon-attention"></i></div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize"></button>
      <button aria-label="Close" onclick="error_close()"></button>
    </div>
  </div>
  <div class="window-body">
    <form>
      <h2 class="h2-error">Error: zaznacz ze nie jestes robotem</h2>
    </form>
  </div>
</div>';
}
}
?>
<html>
    <head>
        <title>Obywatel<?php echo ' '.$id ?> - Kazachstan.net</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link rel="shortcut icon" href="res/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale" />
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fontello-013dd3c1/css/fontello.css" type="text/css">
<link rel="stylesheet" href="css/ob.css">
<link rel="stylesheet" href="css/k2.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
   <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    </head>
    <script src="js/skrypty.js"></script>
<body onload="startTime();startTime2()">
<a href="index.php"><img src="res/back.png" width="60px" height="60px" class="back"></a>
<h1 class="kaza" >Obywatel_<?php echo $id ?></h1>
    <span class="text1">Witamy w kartotece obywatela numer <?php echo ' '.$id ?>. Możesz wystawic ocenę oraz napisac komentarz.</span>
    <div class="window" id="window2" style="width: 300px">
  <div class="title-bar">
    <div class="title-bar-text"><i class="icon-star"></i> <span class="span_underline">W</span>ystaw opinię</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('window2')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body">
    <div class="star-rating" id="star-rating">
        <form action="ob_wspolne.php?id=<?php echo $id ?>" method="post">
      <input type="radio" name="stars" id="star-a" value="5"/>
      <label for="star-a"></label>

      <input type="radio" name="stars" id="star-b" value="4"/>
      <label for="star-b"></label>
  
      <input type="radio" name="stars" id="star-c" value="3"/>
      <label for="star-c"></label>
  
      <input type="radio" name="stars" id="star-d" value="2"/>
      <label for="star-d"></label>
  
      <input type="radio" name="stars" id="star-e" value="1"/>
      <label for="star-e"></label>
       <input type="submit" value="Przeslij" id="submit_ocena">
        </form>
</div>
  </div>
</div>
    <div class="window" id="window3" style="width: 300px">
  <div class="title-bar">
    <div class="title-bar-text"><i class="icon-eye-off"></i> zdj.jpg</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('window3')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body">
    <img src="res/alt.jpg" width="280px">
  </div>
</div>
     <div class="startbar">
     <div class="menu_start" id="ms">
         <div class="ms_side"></div>
         <ul>
             <li><img src="res/icon1.png"><span class="span_li">Obywatel <?php echo $id; ?></span></li>
             <?php $id2 = $id+1; echo '<a href="ob_wspolne.php?id='.$id2.'">';?><li id="li2"><img src="res/icon3.png"><span class="span_li"><span class="span_underline">N</span>astępny ob.</span></li></a>
         <?php $id3 = $id-1; echo '<a href="ob_wspolne.php?id='.$id3.'">';?><li id="li3"><img src="res/icon3.png"><span class="span_li"><span class="span_underline">P</span>oprzedni ob.</span></li></a>
             <a href="logowanie.php"><li><img src="res/icon4.png"><span class="span_li"><span class="span_underline">L</span>ogowanie</span></li></a>
             <a href="https://github.com/Mateusz-Szymkiewicz1/kazachstan.net" target="_blank"><li><img src="res/icon6.png"><span class="span_li"><span class="span_underline">O</span> projekcie</span></li></a>
             <a href="help.php"><li><img src="res/icon2.png"><span class="span_li"><span class="span_underline">P</span>omoc</span></li></a>
             <a href="index.php"><li id="li7"><img src="res/icon5.png"><span class="span_li"><span class="span_underline">Z</span>amknij</span></li></a>
         </ul>
     </div>
  <div id="startbutton" class="startbutton-off" onclick="menu_start()">
    <b>Start</b>
  </div>
<div class="time" id="time" onclick="pokaz_pm()"></div>
  <div class="time" id="time2" onclick="ukryj_pm()"></div>
    </div>
<div class="window" id="window5" style="width: 320px">
  <div class="title-bar">
    <div class="title-bar-text"><span class="span_underline">D</span>odaj komentarz</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize" onclick="komentarz_close()"></button>
      <button aria-label="Maximize" onclick="komentarz_max('window5')"></button>
      <button aria-label="Close" onclick="komentarz_close()"></button>
    </div>
  </div>
  <div class="window-body">
    <form method="post" action="ob_wspolne.php?id=<?php echo $id ?>" id="frmContact" novalidate="novalidate">
      <textarea name="kom" placeholder="Wpisz komentarz (conajmniej 6 znaków)..." maxlength="160" spellcheck="false"></textarea>
       <div class="g-recaptcha" data-sitekey="6Lei1pUdAAAAAHzmwCXB0Uyk9SGk6EERe88Kxs4e"></div>
      <input type="submit" id="submit_kom" value="Przeslij">  
    </form>
  </div>
</div>
    </body>
      <?php
   require_once "ob_skrypt.php";
?>
</html>