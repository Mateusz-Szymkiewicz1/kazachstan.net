<html>
    <head>
        <title>Formularz kontaktowy - Kazachstan.net</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale" />
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fontello-013dd3c1/css/fontello.css" type="text/css">
<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
<style>
    body{
        background: #208c71;
        color: #fff;
        font-family: 'DotGothic16';     
        text-align: center;
    }
    h1{
        margin-top: 12vh;
        margin-bottom: 60px;
        transition: all 0.4s ease;
    }
    input[type=text]{
        width: 240px;
        border-radius: 8px;
        outline: none;
        border: none;
        height: 40px;
        margin-bottom: 1vw;
        padding: 1vw;
       transition: all 0.4s ease;
        border-bottom: 3px solid #aaa;
    }
     textarea{
        width: 240px;
        border-radius: 8px;
        outline: none;
        border: none;
        height: 125px;
        padding: 10px;
          transition: all 0.4s ease;
          border-bottom: 3px solid #aaa;
         margin-bottom: 4vh;
         resize: none;
    }
    input[type=submit]{
        width: 200px;
        border-radius: 8px;
        outline: none;
        border: none;
        height: 35px;
        margin-bottom: 3vw;
        cursor: pointer;
        transition: all 0.4s ease;
    }
    input[type=text]:focus,textarea:focus{
        width: 280px;
        background-color: #75dfc6;
        color: #fff;
           border-bottom: 3px solid #fff;
    }
    input[type=text]:focus::placeholder,textarea:focus::placeholder {
  color: #fff;
  opacity: 1;
}
    input[type=submit]:hover{
         background-color: #75dfc6;
        color: #fff;
    }
    input{
        font-family: 'DotGothic16';
    }
     ::selection{
        background: #fff;
        color: #208c71;
    }
      .back{
           position: absolute;
           top: 5px;
           right: 10px;
           transform: rotate(90deg);
       }
    form{
        text-align: center;
    }
    .g-recaptcha {
    margin: 15px auto !important;
   width: auto !important;
   height: auto !important;
   text-align: -webkit-center;
   text-align: -moz-center;
   text-align: -o-center;
   text-align: -ms-center;
        margin-bottom: 25px !important;
    }
    </style>
    </head>
    <body>
        <h1>Formularz Kontaktowy</h1>
        <a href="index.php"><img src="back.png" width="60px" height="60px" class="back"></a>
     <form method="post" action="uwaga.php" id="frmContact" novalidate="novalidate">
      <textarea name="uwaga" placeholder="Wpisz uwagę (conajmniej 6 znaków)..." maxlength="160" spellcheck="false"></textarea><br />
      <input type="text" pattern="^[a-zA-Z0-9]*$" placeholder="Podpis (niewymagane)..." name="podpis" autocomplete="off" maxlength="28">
       <div class="g-recaptcha" data-sitekey="6Lei1pUdAAAAAHzmwCXB0Uyk9SGk6EERe88Kxs4e"></div>
      <input type="submit" value="Przeslij">  
    </form>
        <?php
        $uwaga = $_POST['uwaga'] ?? null;
        $podpis = $_POST['podpis'] ?? null;
        if($uwaga != null and strlen($uwaga) > 5){
      if(!empty($_POST['g-recaptcha-response'])){
        $secret = '6Lei1pUdAAAAAPPmDOFgJZZHVepP1w7fiYY_QrLz';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
if(preg_match('/^[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ][A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/', $uwaga) or preg_match('/^[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ][A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/', $podpis) and preg_match('/^[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*[A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ][A-Za-z0-9 ,.ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]*$/', $uwaga)){
        require_once "connect.php";
		$sql_uwaga = "INSERT INTO uwagi(tresc, podpis, data) VALUES('$uwaga', '$podpis', now());";
        $stmt = $db->prepare($sql_uwaga);
        $stmt->execute();
    header: 'Location: index.php';
    echo '<script type="text/javascript">document.location = "index.php"; </script>';
}
      }
        }
        ?>
    </body>
    </html>