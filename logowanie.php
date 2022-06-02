<html>
    <head>
        <title>Logowanie - Kazachstan.net</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <link rel="shortcut icon" href="res/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale" />
<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
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
    input{
        width: 240px;
        font-family: 'DotGothic16';
        outline: none;
        height: 34px;
        margin-bottom: 35px;
        padding: 13px;
       transition: all 0.4s ease;
    }
    input[type=text]::placeholder,input[type=password]::placeholder {
  color: #000;
}
    input[type=submit]{
        width: 210px;
        margin-bottom: 3vw;
        padding: 0;
        cursor: pointer;
        background: silver;
        box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px #fff,inset -2px -2px grey,inset 2px 2px #dfdfdf;
    }
    input[type=text]:focus,input[type=password]:focus{
        width: 280px;
    }
    input[type=password], input[type=text]{
        border: 0;
        box-shadow:inset -1px -1px #fff,inset 1px 1px grey,inset -2px -2px #dfdfdf,inset 2px 2px #0a0a0a;
    }
     ::selection{
        background: #fff;
        color: #208c71;
    }
     input[type=password]::selection, input[type=text]::selection{
        background: #969eff;
        color: #fff;
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
        <a href="index.php"><img src="res/back.png" width="60px" height="60px" class="back"></a>
    <form action="index.php" method="post">
        <input type="text" placeholder="Wpisz login..." name="nick" autocomplete="off" pattern="[A-Za-z_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+" maxlength="30"><br />
        <input type="password" placeholder="Wpisz hasło..." name="haslo" autocomplete="off" pattern="[A-Za-z_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+" maxlength="30"><br />
        <input type="submit" value="Zaloguj">
        </form>
    </body>
    </html>