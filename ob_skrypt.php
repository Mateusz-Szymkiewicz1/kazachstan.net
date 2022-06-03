<?php
   error_reporting(0);
        require_once "connect.php";
			$ocena = 0;
      	$ocena = $_POST['stars'];
		$sql_sel= "SELECT * FROM obywatele WHERE id = '$id';";
		$stmt = $db->prepare($sql_sel);
    $stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
    $ocena_srednia = 0;
    if($row['suma_ocen'] != 0 and $row['ilosc_ocen'] != 0){
		$ocena_srednia = $row['suma_ocen']/$row['ilosc_ocen'];
    }
// DODANIE OCENY
		if($ocena > 0 and !isset($_COOKIE[$id])){
            setcookie($id, 'True', time() + (86400 * 30), "/");
			$p1 = $row['ilosc_ocen']+1;
			$p2 = $row['suma_ocen']+$ocena;
			$sql_upd = "UPDATE obywatele
                       SET obywatele.ilosc_ocen = '$p1', obywatele.suma_ocen = '$p2'
                     WHERE obywatele.id  = '$id' 
                      ;
                    ";
                    $stmt = $db->prepare($sql_upd);
                    $stmt->execute();
      header('Location: index.php');
      echo '<script type="text/javascript">document.location = "index.php"; </script>';
		}
// WYŚWIETLANIE KOMENTARZY
    $sql_kom = "SELECT * FROM komentarze WHERE ob_id = '$id' ORDER BY data DESC;";
    $stmt = $db->prepare($sql_kom);
    $stmt->execute();
    $ile_kom = $stmt->rowCount();
    $row_kom = $stmt->fetch(PDO::FETCH_ASSOC);
   if($ile_kom < 1){
          echo '<div class="window" id="window4" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text"><i class="icon-mail"></i> <span class="span_underline">K</span>omentarze.exe ('.$ile_kom.')</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('."'window4'".')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">'.'<span class="span_kom" onclick="komentarz()">'.'Dodaj własny komentarz'.'</span>'.'<br />'.'<br />'.'Brak komentarzy ;(';
    echo '</div></div>'; 
   }
else{
    echo '<div class="window" id="window4" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text"><i class="icon-mail"></i> <span class="span_underline">K</span>omentarze.exe ('.$ile_kom.')</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('."'window4'".')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">'.'<span class="span_kom" onclick="komentarz()">'.'Dodaj własny komentarz'.'</span>'.'<br />'.'<br />'.
    $row_kom['tresc'].' - '.'<span class="span_data">'.$row_kom['data'].'</span>'.'<br />'.'<br />';
            while ($row_kom = $stmt->fetch(PDO::FETCH_ASSOC)) {
                 echo $row_kom['tresc'].' - '.'<span class="span_data">'.$row_kom['data'].'</span>'.'<br />'.'<br />';
				}
    echo '</div></div>';       
}
// WYŚWIETLANIE OCEN
    if(fmod($ocena_srednia,1) == 0.0){
         echo '<div class="window" id="window" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text"><i class="icon-thumbs-up-alt"></i> <span class="span_underline">O</span>cena obywatela</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('."'window'".')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">
    <h2 class="srednia">'.'Ocena: '.round($ocena_srednia, 2).'.0'.'</h2>'.'
  </div>
</div>';
    }
    else{
          echo '<div class="window" id="window" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text"><i class="icon-thumbs-up-alt"></i> <span class="span_underline">O</span>cena obywatela</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('."'window'".')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">';
        if(is_nan($ocena_srednia)){
            echo '<h2 class="srednia">'.'Ocena: '.'Brak'.'</h2>'.'</div></div>';    
        }
        else{
               echo '<h2 class="srednia">'.'Ocena: '.round($ocena_srednia, 2).'</h2>'.'</div></div>'; 
        }
    }
// WYŚWIETLANIE DANYCH
$stmt = $db->prepare($sql_sel);
$stmt->execute();
    $row_dane = $stmt->fetch(PDO::FETCH_ASSOC);
echo '<div class="window" id="window7" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text"><i class="icon-export"></i> <span class="span_underline">D</span>ane personalne</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize" onclick="komentarz_max('."'window7'".')"></button>
      <button aria-label="Close"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">
    <h3 class="srednia">'.'<span class="span_data">'.'IMIE: '.'</span>'.$row_dane['imie'].'</h3>'.'
    <h3 class="srednia">'.'<span class="span_data">'.'NAZWISKO: '.'</span>'.$row_dane['nazwisko'].'</h3>'.'
    <h3 class="srednia">'.'<span class="span_data">'.'NARODOWSC: '.'</span>'.$row_dane['narodowosc'].'</h3>'.'
    <h3 class="srednia">'.'<span class="span_data">'.'WIEK: '.'</span>'.$row_dane['wiek'].'</h3>'.'
    <h3 class="srednia">'.'<span class="span_data">'.'PLEC: '.'</span>'.$row_dane['plec'].'</h3>'.'
  </div>
</div>';
            ?>
			<?php

if (!isset($_SESSION)) {
    session_start();
}
?>