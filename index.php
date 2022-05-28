<?php
    session_start();
error_reporting(0);
setcookie('loader', 'True', time() + (30 * 60), "/");
require_once "connect.php";  
       $now = time();
    // SYSTEM LOGOWANIA
    $nick = $_POST['nick'];
            $haslo = $_POST['haslo'];
            $sql = "SELECT * FROM uzytkownicy WHERE nick='$nick' AND haslo='$haslo';";
            $stmt = $db->prepare($sql);
            $stmt->execute();
                    $ilu_userow = $stmt->rowCount();
                    $wiersz_user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if($ilu_userow>0){
                        $_SESSION['zalogowany'] = 'True';
                        $_SESSION['time'] = time();
                        $_SESSION['expire'] = $_SESSION['time'] + (15 * 60);
                        $_SESSION['nick'] = $wiersz_user['nick'];
                    }
?>
<html>
<head>
    <title>Kazachstan.net</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontello-013dd3c1/css/fontello.css" type="text/css">
    <link rel="stylesheet" href="main.css" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>
    <script type="text/javascript">
        function pojawienie2(){
              document.getElementById("wrapper").style.display = "block";
        }
        function pojawienie(){
             $("#loader").fadeOut(600);
           window.setTimeout('pojawienie2()', 600);
        }
        function loader(){   
            document.getElementById("loader").style.display = "block";
            window.setTimeout('pojawienie()', 1000);
        }
         function cookie_close(){   
            document.getElementById("window").style.display = "none";
             document.cookie = "zgoda=True; expires=Thu, 18 Dec 2030 12:00:00 UTC";
        }
         $( function() {
    $( "#window" ).draggable();
  } );
        var piosenki = ['song1.mp3', 'song2.mp3','song3.mp3','song4.mp3','song5.mp3'];
        var tytuly = ['papers_please.mp3', 'hymn.mp3','alarm.mp3','ussr.mp3','szpaku.mp3'];
        var grane = 1;
        function granie(){
            document.getElementById("play").style.display = "none";
            document.getElementById("pauza").style.display = "block";
            document.getElementById("pauza").style.marginLeft = "1vw";
            document.getElementById("marque_span").innerHTML = "Teraz gramy: "+tytuly[grane-1];
            document.getElementById('audio_player').play();
        }
        function pauza_granie(){
            document.getElementById('audio_player').pause();
            document.getElementById("marque_span").innerHTML = "Zapauzowano";
        document.getElementById('play').style.display = "block";
            document.getElementById('pauza').style.display = "none";
        }
        function next(){
            if(grane<piosenki.length){
             document.getElementById('audio_player').pause();
            grane = grane+1;
             document.getElementById('audio_player').src = 'audio/song'+grane+'.mp3';
             document.getElementById("play").style.display = "none";
            document.getElementById("pauza").style.display = "block";
            document.getElementById("pauza").style.marginLeft = "1vw";
            document.getElementById("marque_span").innerHTML = "Teraz gramy: "+tytuly[grane-1];
            document.getElementById('audio_player').play();
            }
            else{
                document.getElementById('audio_player').pause();
            grane = 1;
             document.getElementById('audio_player').src = 'audio/song'+grane+'.mp3';
             document.getElementById("play").style.display = "none";
            document.getElementById("pauza").style.display = "block";
            document.getElementById("pauza").style.marginLeft = "1vw";
           document.getElementById("marque_span").innerHTML = "Teraz gramy: "+tytuly[grane-1];              
            document.getElementById('audio_player').play(); 
            }
        }
        function previous(){
            if(grane>1){
             document.getElementById('audio_player').pause();
            grane = grane-1;
             document.getElementById('audio_player').src = 'audio/song'+grane+'.mp3';
             document.getElementById("play").style.display = "none";
            document.getElementById("pauza").style.display = "block";
            document.getElementById("pauza").style.marginLeft = "1vw";
                 document.getElementById("marque_span").innerHTML = "Teraz gramy: "+tytuly[grane-1];
            document.getElementById('audio_player').play();
            }
            else{
                document.getElementById('audio_player').pause();
            grane = piosenki.length;
             document.getElementById('audio_player').src = 'audio/song'+grane+'.mp3';
             document.getElementById("play").style.display = "none";
            document.getElementById("pauza").style.display = "block";
            document.getElementById("pauza").style.marginLeft = "1vw";
                 document.getElementById("marque_span").innerHTML = "Teraz gramy: "+tytuly[grane-1];
            document.getElementById('audio_player').play(); 
            }
        }
    function funkcja_volume(){
    var input = document.getElementById("range");
    var volume = document.getElementById("range").value/100;
        document.getElementById("audio_player").volume = volume;
    }
        function show_volume(){
        document.getElementById("div_range").style.display = "block";
        document.getElementById("btn_volume2").style.display = "block";
        document.getElementById("btn_volume").style.display = "none";
        document.getElementById("btn_volume2").style.marginLeft = "0px";
        }
         function hide_volume(){
        document.getElementById("div_range").style.display = "none";
        document.getElementById("btn_volume").style.display = "block";
        document.getElementById("btn_volume2").style.display = "none";
      document.getElementById("btn_volume2").style.marginLeft = "-33px";
        }
        function wysun_kontakt(){
            document.getElementById("karta-kontakt").style.height = "35vh";
            document.getElementById("span_bezposrednio").style.display = "block";
            document.getElementById("x_icon").style.display = "block";
        }
         function schowaj_kontakt(){
            document.getElementById("karta-kontakt").style.height = "17vh";
            document.getElementById("span_bezposrednio").style.display = "none";
            document.getElementById("x_icon").style.display = "none";
        }
        function ua_hide(){
            document.getElementById("ua").style.display = 'none';
            document.cookie = "ua_closed=True; expires=Thu, 18 Dec 2030 12:00:00 UTC";
        }
    </script>
    <?php
    if(isset($_COOKIE['loader'])){
        echo '<style>'.'.loader{display: none;} .wrapper{display: block;}'.'</style>';
            echo '<body>';
    }
    else{
            echo '<body onload="loader()">';
    }
    ?>
   <div class="loader" id="loader"><img src="loader.gif" height="200px" class="load-gif"></div>
   <div class="wrapper" id="wrapper">
   <?php 
       if(!isset($_COOKIE['zgoda'])){
   echo '<div class="window" id="window" style="width: 300px">
  <div class="title-bar">
    <div class="title-bar-text"><i class="icon-attention"></i> Uwaga<span class="span_font"></span></div>
    <div class="title-bar-controls">
      <button aria-label="Minimize" onclick="cookie_close()"></button>
      <button aria-label="Maximize"></button>
      <button aria-label="Close" onclick="cookie_close()"></button>
    </div>
  </div>
  <div class="window-body">
  <span class="cookie-span">Zamykając to okienko, oraz korzystając z strony wyrażasz zgodę na zbieranie informacji pod postacią plików cookie dla podmiotu Kazachstan-gov sp.z.o.o</span>
  </div>
</div>';
       }
       ?>
    <h1 class="kaza">Kazachstan.net</h1>
    <?php
       if($_SESSION['zalogowany'] = 'True' and $_SESSION['expire'] > $now ){
        echo '<span class="text1">Witamy, '.$_SESSION['nick'].'. Udostępniona możliwośc korzystania z panelu admina.</span>'; 
       }
       else{
         echo '<span class="text1">Witamy w rządowym systemie republiki kazachskiej służącym inwigilowaniu mieszkanców naszych pięknych ziem. Zaloguj się po więcej informacji.</span>'; 
       }
       ?>
        <?php
       if($_SESSION['zalogowany'] = 'True' and $_SESSION['expire'] > $now ){
            echo '<a href="usuwanie.php"><div class="zaloguj">Wyloguj</div></a>';
            echo '<a href="admin.php" target="_blank"><div class="admin_btn">Panel Admina</div></a>';
       }
       else{
      echo '<a href="logowanie.php"><div class="zaloguj">Zaloguj</div></a>';
       }
       ?>
       <br /><br /><br /><br /><br /><br />
       <?php
       if(!isset($_COOKIE['ua_closed'])){
         echo '<div class="ua" id="ua">Uwaga! Rząd Kazachstanu, oraz podmiot kontroli obywateli "kazachstan.net" nie wspierają działan wojskowych rosjan na terenach Ukrainy. <span class="span_ua" onclick="ua_hide()">zamknij</span></div>';
       }  
        ?>
    <form action="index.php" method="get" class="form">
        <select id="lista" name="lista">
           <option value="domyslnie">Sortuj od...</option>
            <option value="domyslnie">Domyślnie</option>
                <option value="najlepszy">Od najlepszego</option>
                <option value="najgorszy">Od najgorszego</option>
        </select>
        <input type="submit" value="Sortuj">
    </form>
    <form action="index.php" method="get" class="search_form">
        <input type="search" placeholder="Szukaj..." name="szukane" maxlength="20" spellcheck="false" pattern="[A-Za-z0-9_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+" autocomplete="off">
        <input type="submit" value="Szukaj">
    </form>
    <div class="div_hymn">
    <button class="play" id="play" onclick="granie()"><img src="play.jpg" height="22px" width='17px'></button>
    <button class="pauza" id="pauza" onclick="pauza_granie()"><img src="pause.png" height="22px" width='17px'></button>
    <button class="previous" id="previous" onclick="previous()"><img src="previous.png" height="22px" width='17px'></button>
  <audio src="audio/song1.mp3" id="audio_player" loop></audio>
        <div class="song"><div class="marque"><span class="marque_span" id="marque_span">Kazakh media player 2.0</span></div></div>
   <button class="next" id="next" onclick="next()"><img src="next.png" height="22px" width='17px'></button>
   <button class="btn_volume" id="btn_volume" onclick="show_volume()"><img src="volume.png" height="22px" width='17px'></button>
        <button class="btn_volume" id="btn_volume2" onclick="hide_volume()"><img src="volume.png" height="22px" width='17px'></button>
        <div class="div_range" id="div_range">
  <input type="range" id="range" value="51.5" onmouseup="funkcja_volume()" />
    <div class="triangle"></div>
            </div>
    </div>
    <br /><br /><br />
    <?php
    require_once "connect.php";
    $sort = $_GET['lista'] ?? 'domyslnie'; 
       if(isset($_GET['szukane'])){
               $szukane = explode(' ', $_GET['szukane']) ?? null;
       }
       if($szukane != null){
           for($i = 0; $i<count($szukane); $i++){
        $search = "'%".$szukane[$i]."%'";
    $sql = "SELECT * FROM obywatele WHERE imie LIKE $search or nazwisko LIKE $search or id LIKE $search";
    $stmt = $db->prepare($sql);
            $stmt->execute();
        $wyniki = $stmt->rowCount();
           if($wyniki>0){
         echo '<span class="wyniki2">'.'Wyniki: '.$wyniki.'</span>';
             while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               echo '<a href="ob_wspolne.php?id='.$row['id'].'">
            <div class="karta col-md-3">
                <h1 class="imie">Obywatel_'.$row['id'].'</h1><i class="icon-user-1"></i><span class="ocena">Ocena:';
               require "gwiazdki.php";  
               echo '
                </span><span class="reszta">Więcej informacji..</span>
            </div>
            </a>'; 
           }
                              echo '<div class="karta col-md-3" id="karta-kontakt">
        <h3>Zauważyłes buga na stronie? Chcesz wsypac swojego sąsiada? Napisz do nas przez<br /> <a class="a-uwaga" href="uwaga.php" target="_blank">formularz kontaktowy</a>, lub skontaktuj sie z nami <span class="span_kontakt" onclick="wysun_kontakt()">bezposrednio</span><span id="span_bezposrednio"><br /> <i class="icon-mail"></i> - kazachstan @ gov.kz<br /><br /><i class="icon-info"></i> - Plac Lenina 12, Astana</span></h3><img src="x.png" height="20px" width="20px" id="x_icon" onclick="schowaj_kontakt()">
                 </div>'.'<br />'.'<br />';
            break;
        }
           }
           if($wyniki == 0){
               echo '<span class="wyniki">'.'Nie znaleziono wyników ;( '.'</span>';
           }
       }
       else{
    $id = 0;
    $wiecej = $_GET['wiecej'] ?? 'False'; 
    if($sort == 'najgorszy'){
        $sql = "SELECT * FROM obywatele ORDER BY suma_ocen/ilosc_ocen ASC";
    }
    else if($sort == 'najlepszy'){
        $sql = "SELECT * FROM obywatele ORDER BY suma_ocen/ilosc_ocen DESC";
    }
    else{
        $sql = "SELECT * FROM obywatele";
    }
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if($wiecej != 'True'){
            for($i = 1; $i <= 14; $i++){
                   $row =  $stmt->fetch(PDO::FETCH_ASSOC);
              echo '<a href="ob_wspolne.php?id='.$row['id'].'">
        <div class="karta col-md-3">
            <h1 class="imie">Obywatel_'.$row['id'].'</h1><i class="icon-user-1"></i><span class="ocena">Ocena:';
           require "gwiazdki.php";  
           echo '
            </span><span class="reszta">Więcej informacji..</span>
        </div>
    </a>';
            }
            echo '<a href="index.php?lista='.$sort.'&wiecej=True"><div class="karta col-md-3" id="rozwin"><h1 class="imie" id="h1_rozwin">Rozwin listę</h1></div></a>';
        }
        else{
           while($row =  $stmt->fetch(PDO::FETCH_ASSOC)){
              echo '<a href="ob_wspolne.php?id='.$row['id'].'">
        <div class="karta col-md-3">
            <h1 class="imie">Obywatel_'.$row['id'].'</h1><i class="icon-user-1"></i><span class="ocena">Ocena:';
           require "gwiazdki.php";  
           echo '
            </span><span class="reszta">Więcej informacji..</span>
        </div>
    </a>';
           } 
             echo '<a href="index.php?lista='.$sort.'"><div class="karta col-md-3" id="rozwin"><h1 class="imie" id="h1_rozwin">Zwin listę</h1></div></a>';
        }
               $id = 0;
        } 
               echo '<div class="karta col-md-3" id="karta-kontakt">
        <h3>Zauważyłes buga na stronie? Chcesz wsypac swojego sąsiada? Napisz do nas przez<br /> <a class="a-uwaga" href="uwaga.php" target="_blank">formularz kontaktowy</a>, lub skontaktuj sie z nami <span class="span_kontakt" onclick="wysun_kontakt()">bezposrednio</span><span id="span_bezposrednio"><br /> <i class="icon-mail"></i> - kazachstan @ gov.kz<br /><br /><i class="icon-info"></i> - Plac Lenina 12, Astana</span></h3><img src="x.png" height="20px" width="20px" id="x_icon" onclick="schowaj_kontakt()">
                 </div>'.'<br />'.'<br />';
       ?>
     <?php
                if($_SESSION['expire'] < $_SESSION['time']){
                        session_destroy();
                    }
    ?>
    </div>
</body>
</html>
