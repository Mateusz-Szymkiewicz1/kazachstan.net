<html>
    <head>
        <title>Logowanie - Kazachstan.net</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link rel="shortcut icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale" />
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fontello-013dd3c1/css/fontello.css" type="text/css">
<style>
    body{
        background: #208c71;
        color: #fff;
        font-family: 'DotGothic16';     
        text-align: center;
    }
    h1{
        margin-top: 20vh;
        margin-bottom: 5vw;
       transition: all 0.4s ease;
    }
    input[type=text]{
        width: 240px;
        border-radius: 8px;
        outline: none;
        border: none;
        height: 34px;
        margin-bottom: 35px;
        padding: 12px;
       transition: all 0.4s ease;
        border-bottom: 3px solid #aaa;
    }
     input[type=password]{
        width: 240px;
        border-radius: 8px;
        outline: none;
        border: none;
         height: 34px;
          margin-bottom: 35px;
        padding: 12px;
          transition: all 0.4s ease;
          border-bottom: 3px solid #aaa;
    }
    input[type=submit]{
        width: 210px;
        border-radius: 8px;
        outline: none;
        border: none;
         height: 34px;
        margin-bottom: 3vw;
        cursor: pointer;
        transition: all 0.4s ease;
    }
    input[type=text]:focus,input[type=password]:focus{
        width: 280px;
        background-color: #75dfc6;
        color: #fff;
           border-bottom: 3px solid #fff;
    }
    input[type=text]:focus::placeholder,input[type=password]:focus::placeholder {
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
    </style>
    </head>
    <body>
        <h1>System Logowania</h1>
        <a href="index.php"><img src="back.png" width="60px" height="60px" class="back"></a>
    <form action="index.php" method="post">
        <input type="text" placeholder="Wpisz login..." name="nick" autocomplete="off" pattern="[A-Za-z_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+" maxlength="30"><br />
        <input type="password" placeholder="Wpisz hasło..." name="haslo" autocomplete="off" pattern="[A-Za-z_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+" maxlength="30"><br />
        <input type="submit" value="Zaloguj">
        </form>
    </body>
    </html>