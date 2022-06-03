<html>

<head>
    <title>Panel Admina - Kazachstan.net</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="shortcut icon" href="res/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale" />
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript">
        function window_pokaz(id) {
            document.getElementById("window" + id).style.display = 'block';
        }

        function window_ukryj(id) {
            document.getElementById("window" + id).style.display = 'none';
        }

    </script>
    <style>
        body {
            background: #208c71;
            color: #fff;
            font-family: 'DotGothic16';
            text-align: center;
            overflow-x: hidden;
        }

        ::selection {
            color: #208c71;
            background: #fff;
        }

        input::selection {
            background: #969eff;
            color: #fff;
        }

        h1 {
            margin-top: 18vh;
            margin-bottom: 5vw;
        }

        .h3-admin {
            display: inline;
            font-size: 1.5vw;
            margin-top: 4vw;
        }

        input[type=number] {
            display: inline;
            margin-top: 2vh;
            margin-left: 0vh;
            width: 10vw;
        }

        .h3-admin2 {
            font-size: 1.5vw;
            margin-top: 4vw;
            display: inline;
            margin-left: 3vw;
        }

        input[type=submit] {
            outline: none;
            background: silver;
            box-shadow: inset -1px -1px #0a0a0a, inset 1px 1px #fff, inset -2px -2px grey, inset 2px 2px #dfdfdf;
            padding: 6px;
            margin-left: 1.5vw;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .back {
            position: absolute;
            top: 5px;
            right: 10px;
            transform: rotate(90deg);
        }

        h4 {
            text-align: left;
            padding-left: 3vw;
            line-height: 19px;
            cursor: pointer;
            width: 220px;
        }

        h4:first-of-type {
            margin-top: 15vh;
        }

        .window-body {
            padding-left: 6px;
        }

        ::-webkit-scrollbar {
            width: 16px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #dfdfdf;
            box-shadow: var(--border-raised-outer), var(--border-raised-inner);
        }

        .window {
            position: absolute;
            top: 50vh;
            right: 1.5vw;
            font-size: 12px;
            height: 220px;
            padding-bottom: 10px;
            overflow-y: scroll;
            word-wrap: break-word;
        }

        .window4>.window-body {
            padding-top: 10px;
        }

        .title-bar,
        .window {
            -webkit-font-smoothing: none;
            font-family: "DotGothic16";
            font-size: 11px
        }

        .window {
            background: silver;
            box-shadow: inset -1px -1px #0a0a0a, inset 1px 1px #dfdfdf, inset -2px -2px grey, inset 2px 2px #fff;
            padding: 3px;
            z-index: 1;
        }

        .title-bar {
            align-items: center;
            background: linear-gradient(90deg, navy, #1084d0);
            display: flex;
            justify-content: space-between;
            padding: 3px 4px 3px 5px
        }

        .title-bar-text {
            color: #fff;
            font-weight: 700;
            letter-spacing: 0;
            margin-right: 24px
        }

        .title-bar-controls {
            display: flex
        }

        .title-bar-controls button {
            display: block;
            cursor: pointer;
            min-height: 14px;
            min-width: 16px;
            padding: 0
        }

        .title-bar-controls button[aria-label=Minimize] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='6' height='2' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23000' d='M0 0h6v2H0z'/%3E%3C/svg%3E");
            background-position: bottom 3px left 3px;
            background-repeat: no-repeat
        }

        .title-bar-controls button[aria-label=Maximize] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='9' height='9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 0H0v9h9V0zM8 2H1v6h7V2z' fill='%23000'/%3E%3C/svg%3E");
            background-position: top 0.8px left 2px;
            background-repeat: no-repeat
        }

        .title-bar-controls button[aria-label=Close] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='8' height='7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0 0h2v1h1v1h2V1h1V0h2v1H7v1H6v1H5v1h1v1h1v1h1v1H6V6H5V5H3v1H2v1H0V6h1V5h1V4h1V3H2V2H1V1H0V0z' fill='%23000'/%3E%3C/svg%3E");
            background-position: top 2px left 3px;
            background-repeat: no-repeat;
            margin-left: 2px
        }

        .window-body {
            margin: 8px
        }

        .window {
            display: block;
            margin-top: 2vh;
            margin-left: 2vw;
            position: absolute;
            cursor: move;
            display: none;
        }

        ::-webkit-scrollbar {
            width: 16px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #dfdfdf;
        }

        :root {
            --border-raised-outer: inset -1px -1px #0a0a0a,
                inset 1px 1px #fff;
            --border-raised-inner: inset -2px -2px #808080,
                inset 2px 2px #dfdfdf;
        }

        .span_data {
            color: #9b59b6;
        }

        a {
            color: #0000ff;
            text-decoration: none;
        }

        table {
            text-align: center;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 100px;
            border: 2px solid #fff;
            width: 100%;
            table-layout: fixed;
        }

        .tr1>td {
            border: none;
        }

        td {
            border: 2px solid #fff;
            padding: 7px;
            word-wrap: break-word;
        }

        h2 {
            margin-top: 50px;
        }

        .dodaj_submit {
            margin-bottom: 120px;
            margin-top: 20px;
            width: 80px;
        }

        #dodaj_plec,
        input[type=text],
        input[type=number] {
            background-color: #fff;
            box-shadow: inset -1px -1px #fff, inset 1px 1px grey, inset -2px -2px #dfdfdf, inset 2px 2px #0a0a0a;
            box-sizing: border-box;
            padding: 3px 4px;
            border: none
        }

        #dodaj_plec {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='16' height='17' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15 0H0v16h1V1h14V0z' fill='%23DFDFDF'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M2 1H1v14h1V2h12V1H2z' fill='%23fff'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M16 17H0v-1h15V0h1v17z' fill='%23000'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15 1h-1v14H1v1h14V1z' fill='gray'/%3E%3Cpath fill='silver' d='M2 2h12v13H2z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11 6H4v1h1v1h1v1h1v1h1V9h1V8h1V7h1V6z' fill='%23000'/%3E%3C/svg%3E");
            background-position: top 5px right 5px;
            background-repeat: no-repeat;
            border-radius: 0;
            padding-right: 32px;
            position: relative
        }

        select:focus {
            outline: none
        }

        select,
        input[type=text],
        input[type=number] {
            width: 190px;
            height: 26px;
            font-size: 11px;
            text-indent: 3px;
            margin-bottom: 2vh;
            font-family: 'DotGothic16';
            outline: none;
        }

        input[type=number] {
            width: 130px;
        }

        .h2_dodaj {
            margin-bottom: 40px;
        }

        .span_error {
            display: block;
            margin-bottom: 5vh;
            color: #ff0081;
            font-weight: 800;
            letter-spacing: 2px;
        }

        a {
            color: #969eff;
        }

        .window_a {
            color: #0000ff;
        }

        #a_wiecej {
            margin: 0;
            padding: 0;
        }

    </style>
</head>

<body>
    <h1 id="h1_panel">Panel Admina</h1>
    <a href="index.php"><img src="res/back.png" width="60px" height="60px" class="back"></a>
    <?php
    // FORMULARZ ZMIANY OCEN
        echo '<form action="admin.php" method="post">';
            echo '<h3 class="h3-admin">'.'Ilosc ocen: '.'</h3>';
            echo '<input type="number" min="1" name="ilosc_admin">';
            echo '<h3 class="h3-admin2" >'.'Suma ocen: '.'</h3>';
             echo '<input type="number" min="1" name="suma_admin">';
            echo '<h3 class="h3-admin2" >'.'ID obywatela: '.'</h3>';
            echo '<input type="number" min="1" name="id_admin">';
            echo '<input type="submit" value="przeslij">';
            echo '</form>';
          // ZMIANY Z PANELU ADMINA 
            require_once "connect.php";  
                   $id_admin = $_POST['id_admin'] ?? 0;
                    $suma_admin = $_POST['suma_admin'] ?? 0;
                    $ilosc_admin = $_POST['ilosc_admin'] ?? 0;  	
    if($suma_admin > 0 and $ilosc_admin > 0 and $id_admin > 0){
		$sql = "UPDATE obywatele
                       SET ilosc_ocen = $ilosc_admin, suma_ocen = $suma_admin
                     WHERE id  = $id_admin;
                    "; 
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
    // WYŚWIETLANIE OCEN
		$sql2 = "SELECT * FROM obywatele"; 
        $stmt = $db->prepare($sql2);
$stmt->execute();
      $wiecej = $_GET['wiecej'] ?? 'False';
    if($wiecej != 'True'){
       for($i = 1; $i <= 10; $i++){
        $wiersz = $stmt->fetch(PDO::FETCH_ASSOC);
        if($wiersz['suma_ocen'] != 0 and $wiersz['ilosc_ocen'] != 0){
            $ocena = round($wiersz['suma_ocen']/$wiersz['ilosc_ocen'], 2);
        }
        else{
            $ocena = null;
        }
            $id = $wiersz['id'];
        if(is_nan($ocena)){
                   echo '<h4 onclick="window_pokaz('."'".$id."'".')">'.'Obywatel_'.$id.': '.'Brak'.' - <a href="usun_ob.php?id='.$id.'">Usun</a></h4>';
              }
           else{
                   echo '<h4 onclick="window_pokaz('.$id.')">'.'Obywatel_'.$id.': '.$ocena.' - <a href="usun_ob.php?id='.$id.'">Usun</a></h4>';
            }
        }
        echo '<a href="admin.php?wiecej=True" id="a_wiecej"><h4 style="color: #969eff; margin: 0;">Pokaz wiecej...</h4></a>';
    }
    else{
             while ($wiersz = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $wiersz['id'];
                if($wiersz['suma_ocen'] != 0 and $wiersz['ilosc_ocen'] != 0){
                    $ocena = round($wiersz['suma_ocen']/$wiersz['ilosc_ocen'], 2);
                }
                else{
                    $ocena = null;
                }
               if(is_nan($ocena)){
                   echo '<h4 onclick="window_pokaz('.$id.')">'.'Obywatel_'.$id.': '.'Brak'.' - <a href="usun_ob.php?id='.$id.'">Usun</a></h4>';
               }
               else{
                   echo '<h4 onclick="window_pokaz('.$id.')">'.'Obywatel_'.$id.': '.$ocena.' - <a href="usun_ob.php?id='.$id.'">Usun</a></h4>';
               }
           }  
        echo '<a href="admin.php?wiecej=False" id="a_wiecej"><h4 style="color: #969eff; margin: 0;">Pokaz mniej...</h4></a>';
    }
    // KOMENTARZE - WYŚWIETLANIE
    $sql_count = "SELECT id FROM obywatele";
    $stmt = $db->prepare($sql_count);
$stmt->execute();
    $ile_ob = $stmt->rowCount();
for($i = 1; $i<=$ile_ob; $i++){
    $sql_kom = "SELECT * FROM komentarze WHERE ob_id = '$i' ORDER BY data DESC;";
    $stmt = $db->prepare($sql_kom);
    $stmt->execute();
    $ile_kom = $stmt->rowCount();
    $row_kom = $stmt->fetch(PDO::FETCH_ASSOC);
if($ile_kom < 1){
      echo '<div class="window" id="window'.$i.'" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text">Komentarze ('.$ile_kom.') - Obywatel_'.$i.'</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize"></button>
      <button aria-label="Close" onclick="window_ukryj('.$i.')"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">'.'<br />'.'Zero komentarzy ;(';
    echo '</div></div>'; 
    }
    else{
    echo '<div class="window" id="window'.$i.'" style="width: 300px">
  <div class="title-bar" id="title-bar">
    <div class="title-bar-text">Komentarze ('.$ile_kom.') - Obywatel_'.$i.'</div>
    <div class="title-bar-controls">
      <button aria-label="Minimize"></button>
      <button aria-label="Maximize"></button>
      <button aria-label="Close" onclick="window_ukryj('.$i.')"></button>
    </div>
  </div>
  <div class="window-body" id="window-body">'.'<br />'.
    $row_kom['tresc'].' - '.'<span class="span_data">'.$row_kom['data'].'</span>'.' '.'<a href="usuwanie_kom.php?id='.$row_kom['id'].'" class="window_a">'.'Usun'.'</a>'.'<br />'.'<br />';
            while ($row_kom = $stmt->fetch(PDO::FETCH_ASSOC)) {
                 echo $row_kom['tresc'].' - '.'<span class="span_data">'.$row_kom['data'].'</span>'.' '.'<a href="usuwanie_kom.php?id='.$row_kom['id'].'" class="window_a">'.'Usun'.'</a>'.'<br />'.'<br />';
				}
    echo '</div></div>'; 
    }
    for($j = 1; $j <= $ile_ob; $j++){
        echo '<script>
              $( function() {
    $( "#window'.$j.'" ).draggable();
            } );
        </script>';
    }
}
    // WYŚWIETLANIE UWAG
    $sql_uwagi = "SELECT * FROM uwagi ORDER BY data DESC;";
    $stmt = $db->prepare($sql_uwagi);
  $stmt->execute();
    echo '<h2>Uwagi</h2>';
    echo '<table><tbody align="Center">
        <tr class="tr1">
            <td>id</td>
            <td>tresc</td>
            <td>podpis</td>
            <td>data</td>
        </tr>';
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id'];
                echo'<tr height= "20">
					<td>'.$row['id'].'</td>
					<td>'.$row['tresc'].'  </td>	
					<td>'.$row['podpis'].'  </td>	
					<td>'.$row['data'].'  </td>	
					<td> <a href="usun_uwage.php?id='.$id.'" class="color_a">'.'Usun'.'</a>'.'</td>	
				</tr>';
            }
		echo '</tbody></table>';
    echo     '<br />'.'<h2 class="h2_dodaj" id="h2_dodaj">Dodaj Obywatela</h2>';
    // DODANIE OBYWATELA
    $d_imie = $_POST['dodaj_imie'] ?? null;
    $d_nazwisko = $_POST['dodaj_nazwisko'] ?? null;
    $d_wiek = $_POST['dodaj_wiek'] ?? null;
    $d_plec = $_POST['dodaj_plec'] ?? null;
    $d_narod = $_POST['dodaj_narodowosc'] ?? null;
    $d_przeslano = $_POST['przeslano'] ?? null;
    if($d_przeslano == 'True'){
        if($d_imie != null and $d_nazwisko != null and $d_wiek != null and $d_plec != 'brak' and $d_narod != null){
            $sql_dodaj3 = "SELECT * FROM obywatele ORDER BY id DESC;";
            $stmt = $db->prepare($sql_dodaj3);
            $stmt->execute();
            $row_dodaj3 = $stmt->fetch(PDO::FETCH_ASSOC);
            $nowe_id = $row_dodaj3['id']+1;
            $sql_dodaj = "INSERT INTO obywatele(id, imie, nazwisko, wiek, plec, narodowosc) 
                            VALUES('$nowe_id','$d_imie', '$d_nazwisko', '$d_wiek', '$d_plec', '$d_narod');";
            $stmt = $db->prepare($sql_dodaj3);
            $stmt->execute();
            header: 'Location: index.php';
            echo '<script type="text/javascript">document.location = "index.php"; </script>';
        }
        else{
            echo '<span class="span_error">Podano złe dane wprowadzania!</span>';
        }
    }
        ?>
    <form action="admin.php#h2_dodaj" method="post">
        <input type="text" name="dodaj_imie" placeholder="Wpisz imie..." autocomplete="off" maxlength="15" pattern="[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]+"><br />
        <input type="text" name="dodaj_nazwisko" placeholder="Wpisz nazwisko..." autocomplete="off" maxlength="20" pattern="[A-Za-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ]+"><br />
        <input type="number" name="dodaj_wiek" min="0" max="130" placeholder="Wpisz wiek..."><br />
        <select id="dodaj_plec" name="dodaj_plec">
            <option value="brak">Wybierz płec...</option>
            <option value="Kobieta">Kobieta</option>
            <option value="Mężczyzna">Mężczyzna</option>
        </select><br />
        <input type="text" name="dodaj_narodowosc" placeholder="Wpisz narodowosc..." autocomplete="off" maxlength="25" pattern="[A-Za-z-ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+"><br />
        <input type="hidden" name="przeslano" value="True">
        <input type="submit" value="Dodaj" class="dodaj_submit">
    </form>
</body>

</html>
