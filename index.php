<?php
    session_start();
error_reporting(0);
   setcookie('loader', 'True', time() + (30 * 60), "/");
require_once "connect.php";  
       $now = time();
    // SYSTEM LOGOWANIA
    $polaczenie = @ new mysqli($host, $db_user, $db_password, $db_name);
    $nick = $_POST['nick'];
            $haslo = $_POST['haslo'];
            $sql = "SELECT * FROM uzytkownicy WHERE nick='$nick' AND haslo='$haslo';";
                if($rezultat = @$polaczenie->query($sql)){
                    $ilu_userow = $rezultat->num_rows;
                    $wiersz_user = $rezultat->fetch_assoc();
                    if($ilu_userow>0){
                        $_SESSION['zalogowany'] = 'True';
                        $_SESSION['time'] = time();
                        $_SESSION['expire'] = $_SESSION['time'] + (15 * 60);
                        $_SESSION['nick'] = $wiersz_user['nick'];
                    }
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
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
      <style>
    :root {
        --border-raised-outer: inset -1px -1px #0a0a0a,
            inset 1px 1px #fff;
        --border-raised-inner: inset -2px -2px #808080,
            inset 2px 2px #dfdfdf;
        --typewriterSpeed: 2s;
        --typewriterCharacters: 16;
        --bg-color: #208c71;
    }
  @font-face{
                    font-family: 'font';
                src: URL('font.otf') format('truetype');
            }
    body {
        background: #208c71;
        color: #fff;
        font-family: 'DotGothic16', 'font';
    }

    h1 {
        margin: 0;
        padding: 0;
    }

    .kaza,
    .text1,
    .zaloguj {
        margin-top: 25px;
        margin-left: 2vw;
        display: block;
    }
    .text1 {
        margin-top: 20px;
    }

    .zaloguj {
        width: 192px;
        height: 47px;
        border: 2px solid #fff;
        text-align: center;
        padding-top: 15px;
        cursor: pointer;
        font-size: 19px;
        transition: all 0.3s ease-in-out;
        float: left;
    }
 .admin_btn{
        width: 192px;
        height: 47px;
        border: 2px solid #fff;
        text-align: center;
        padding-top: 15px;
     margin-top: 25px;
     margin-left: 20px;
        cursor: pointer;
        font-size: 19px;
        transition: all 0.3s ease-in-out;
        float: left;
    }
    .zaloguj:hover, .admin_btn:hover {
        color: #208c71;
        background: #fff;
    }

    .karta {
        border: 2px solid #fff;
        height: 48vh;
        width: 16.5vw;
        float: left;
        margin-left: 2vw;
        margin-bottom: 2vw;
        cursor: pointer;
        overflow-x: hidden;
        overflow-y: scroll;
        padding-bottom: 20px;
        -webkit-box-shadow: 5px 10px 30px -6px rgba(0,0,0,0.63); 
box-shadow: 5px 10px 30px -6px rgba(0,0,0,0.63);
        transition: all 0.4s ease;
    }

    .karta::-webkit-scrollbar {
        width: 8px;
    }

    .karta::-webkit-scrollbar-thumb {
        background-color: #dfdfdf;
        box-shadow: var(--border-raised-outer), var(--border-raised-inner);
    }
    .karta:hover{
        transform: scale(0.97);
    }
    .imie {
        text-align: center;
        font-size: 1.5vw;
        margin-top: 4vh;
    }

    .ocena {
        display: block;
        margin-left: 2.2vw;
        margin-top: 1.3vw;
    }

    .reszta {
        display: block;
        margin-left: 2.2vw;
        margin-top: 4vh;
        font-size: 1.2vw;
    }

    a {
        color: #fff;
        text-decoration: none;
    }
    .kaza {
        text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
            0.025em 0.04em 0 #fffc00;
        animation: glitch 3s infinite;
    }

    @keyframes glitch {
        0% {
            text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
                0.025em 0.04em 0 #fffc00;
        }

        15% {
            text-shadow: 0.05em 0 0 #00fffc, -0.03em -0.04em 0 #fc00ff,
                0.025em 0.04em 0 #fffc00;
        }

        16% {
            text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.035em 0 #fc00ff,
                -0.05em -0.05em 0 #fffc00;
        }

        49% {
            text-shadow: -0.05em -0.025em 0 #00fffc, 0.025em 0.035em 0 #fc00ff,
                -0.05em -0.05em 0 #fffc00;
        }

        50% {
            text-shadow: 0.05em 0.035em 0 #00fffc, 0.03em 0 0 #fc00ff,
                0 -0.04em 0 #fffc00;
        }

        99% {
            text-shadow: 0.05em 0.035em 0 #00fffc, 0.03em 0 0 #fc00ff,
                0 -0.04em 0 #fffc00;
        }

        100% {
            text-shadow: -0.05em 0 0 #00fffc, -0.025em -0.04em 0 #fc00ff,
                -0.04em -0.025em 0 #fffc00;
        }
    }

    ::-webkit-scrollbar {
        width: 16px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #dfdfdf;
        box-shadow: var(--border-raised-outer), var(--border-raised-inner);
    }

    .kaza {
        position: relative;
        width: 230px;
    }

    .kaza::before,
    .kaza::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .kaza::before {
        background: var(--bg-color);
        animation: typewriter var(--typewriterSpeed) steps(var(--typewriterCharacters)) 1s forwards;
    }

    .kaza::after {
        width: 0.125em;
        background: #fff;
        animation: typewriter var(--typewriterSpeed) steps(var(--typewriterCharacters)) 1s forwards,
            blink 750ms steps(var(--typewriterCharacters)) infinite;
    }

    @keyframes typewriter {
        to {
            left: 100%;
        }
    }
    .loader{
        width: 100%;
        height: 100%;
    }
    .load-gif{
         margin: 0;
  position: absolute;
  top: 45%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
    }
    .wrapper{
        display: none;
    }
    ::selection{
        background: #fff;
        color: var(--bg-color);
    }
    #lista, input[type=search]{background-color:#fff;box-shadow:inset -1px -1px #fff,inset 1px 1px grey,inset -2px -2px #dfdfdf,inset 2px 2px #0a0a0a;box-sizing:border-box;padding:3px 4px; border:none}
    #lista{appearance:none;-webkit-appearance:none;-moz-appearance:none;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='16' height='17' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15 0H0v16h1V1h14V0z' fill='%23DFDFDF'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M2 1H1v14h1V2h12V1H2z' fill='%23fff'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M16 17H0v-1h15V0h1v17z' fill='%23000'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M15 1h-1v14H1v1h14V1z' fill='gray'/%3E%3Cpath fill='silver' d='M2 2h12v13H2z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11 6H4v1h1v1h1v1h1v1h1V9h1V8h1V7h1V6z' fill='%23000'/%3E%3C/svg%3E");background-position:top 5px right 5px;background-repeat:no-repeat;border-radius:0;padding-right:32px;position:relative}
    select:focus{outline:none}
    select, input[type=search]{
        width: 12vw;
        height: 26px;
        margin-left: 2vw;
        font-size: 11px;
        text-indent: 3px;
        margin-bottom: 2vh;
        font-family: 'DotGothic16';
        outline: none;
    }
    input[type=search]{margin-left: 1vw;}
    input[type=search]::-webkit-search-cancel-button{
    cursor: pointer;
}
    input[type=submit]{
        font-family: 'DotGothic16';
        padding: 3px;
        padding-left: 7px;
        padding-right: 7px;
        cursor: pointer;
    }
    input[type=submit]{background:silver;box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px #fff,inset -2px -2px grey,inset 2px 2px #dfdfdf;
    }
    input[type=submit]:focus{outline:1px dotted #000;outline-offset:-4px}
    h3{
        font-weight: 100;
        display: block;
        margin-left: 2vw;
        margin: 0;
        padding: 0;
    }
    #karta-kontakt{
        /* nowa wysokosc - 35vh */
        height: 17vh;
        width: 33vw;
        font-size: 1.1vw;
        padding: 15px;
        cursor: default;
        position: relative;
    }
    #karta-kontakt:hover{
        transform: scale(1);
    }
    .a-uwaga{
        color: #969eff;
    }
.title-bar,.window,label,ul.tree-view{-webkit-font-smoothing:none;font-family:"DotGothic16";font-size:11px}.window{background:silver;box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px #dfdfdf,inset -2px -2px grey,inset 2px 2px #fff;padding:3px; z-index: 1;}.title-bar{align-items:center;background:linear-gradient(90deg,navy,#1084d0);display:flex;justify-content:space-between;padding:3px 4px 3px 5px}
.title-bar-text{color:#fff;font-weight:700;letter-spacing:0;margin-right:24px}.title-bar-controls{display:flex}.title-bar-controls button{display:block; cursor: pointer; min-height:14px;min-width:16px;padding:0}.title-bar-controls button:active{padding:0}.title-bar-controls button:focus{outline:none}.title-bar-controls button[aria-label=Minimize]{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='6' height='2' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23000' d='M0 0h6v2H0z'/%3E%3C/svg%3E");background-position:bottom 3px left 3px;background-repeat:no-repeat}.title-bar-controls button[aria-label=Maximize]{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='9' height='9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 0H0v9h9V0zM8 2H1v6h7V2z' fill='%23000'/%3E%3C/svg%3E");background-position:top 0.8px left 2px;background-repeat:no-repeat}.title-bar-controls button[aria-label=Close]{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='8' height='7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0 0h2v1h1v1h2V1h1V0h2v1H7v1H6v1H5v1h1v1h1v1h1v1H6V6H5V5H3v1H2v1H0V6h1V5h1V4h1V3H2V2H1V1H0V0z' fill='%23000'/%3E%3C/svg%3E");background-position:top 2px left 3px;background-repeat:no-repeat;margin-left:2px}.window-body{margin:8px}
.window{
   display: block;
    margin-top: 2vh;
    margin-left: 2vw;
    position: absolute;
    cursor: move;
}
    #window{
        position: absolute;
        top: 3vh;
        right: 4vw;
        font-size: 15px;
    }
    .form{
        float: left;
    }
    .wyniki{
        margin-left: 2vw;
        display: block;
        margin-top: 5vh;
    }
      .wyniki2{
        margin-left: 2vw;
        margin-bottom: 3vh;
          font-size: 18px;
        display: block;
        margin-top: 1vh;
    }
    .pauza, .play,.next,.previous,.btn_volume{
        float: left;
        cursor: pointer;
        outline: none;
        background:silver;box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px #dfdfdf,inset -2px -2px grey,inset 2px 2px #fff;
    }
    .search_form{
        float: left;
    }
    .play{
        margin-left: 1vw;
    }
    .pauza{
        margin-left: -33px;
        display: none;
    }
    .song{
        background: #111;
        height: 24px;
        width: 150px;
        float: left;
        margin-top: 1px;
        font-size: 12px;
        padding-top: 3px;
      overflow: hidden;
          position: relative;
        display: block;
        animation: flicker 0.1s infinite;
    }
@keyframes flicker {
  0% {
  opacity: 0.95;
  }
    50%{
        opacity: 1;
    }
}
.marque_span{
        float: left;
        line-height: 19px;
        text-shadow: 0.06rem 0 0.06rem #ea36af, -0.125rem 0 0.06rem #75fa69;
         animation-duration: 0.01s;
       animation-name: textflicker;
       animation-iteration-count: infinite;
       animation-direction: alternate;
    }
    @keyframes textflicker {
  from {
    text-shadow: 1px 0 0 #ea36af, -2px 0 0 #75fa69;
  }
  to {
    text-shadow: 2px 0.5px 2px #ea36af, -1px -0.5px 2px #75fa69;
  }
}
    .marque{
          position: absolute;
        width: 20vw;
    animation: marquee 8s linear infinite;
    }
    @keyframes marquee {
  0% { left: 100%; }
  100% { left: -100%; }
}
    @media only screen and (max-width: 700px) {
        .play,.pauza,.song,.next,.previous,.btn_volume,.div_range{
            display: none;
            opacity: 0;
        }
}
input[type=range]{-webkit-appearance:none;background:transparent;width:140px;}input[type=range]:focus{outline:none}input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='11' height='21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0 0v16h2v2h2v2h1v-1H3v-2H1V1h9V0z' fill='%23fff'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1 1v15h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V1z' fill='%23C0C7C8'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 1h1v15H8v2H6v2H5v-1h2v-2h2z' fill='%2387888F'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M10 0h1v16H9v2H7v2H5v1h1v-2h2v-2h2z' fill='%23000'/%3E%3C/svg%3E");height:21px;transform:translateY(-8px);width:11px}input[type=range]::-moz-range-thumb{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='11' height='21' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0 0v16h2v2h2v2h1v-1H3v-2H1V1h9V0z' fill='%23fff'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1 1v15h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V1z' fill='%23C0C7C8'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 1h1v15H8v2H6v2H5v-1h2v-2h2z' fill='%2387888F'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M10 0h1v16H9v2H7v2H5v1h1v-2h2v-2h2z' fill='%23000'/%3E%3C/svg%3E");border:0;border-radius:0;height:21px;transform:translateY(2px);width:11px}input[type=range]::-webkit-slider-runnable-track{background:#000;border-bottom:1px solid grey;border-right:1px solid grey;box-shadow:1px 0 0 #fff,1px 1px 0 #fff,0 1px 0 #fff,-1px 0 0 #a9a9a9,-1px -1px 0 #a9a9a9,0 -1px 0 #a9a9a9,-1px 1px 0 #fff,1px -1px #a9a9a9;box-sizing:border-box;height:2px;width:100%}input[type=range]::-moz-range-track{background:#000;border-bottom:1px solid grey;border-right:1px solid grey;box-shadow:1px 0 0 #fff,1px 1px 0 #fff,0 1px 0 #fff,-1px 0 0 #a9a9a9,-1px -1px 0 #a9a9a9,0 -1px 0 #a9a9a9,-1px 1px 0 #fff,1px -1px #a9a9a9;box-sizing:border-box;height:2px;width:100%}
    #range{
        float: left;
        cursor: pointer;
    }
    #btn_volume2{
        margin-left: -33px;
        display: none;
    }
    .div_range{
        background:silver;box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px #dfdfdf,inset -2px -2px grey,inset 2px 2px #fff;
        width: 147px;
        float: left;
        margin-top: -65px;
        margin-left: -92px;
        height: 25px;
        padding-left: 3px;
        padding-top: 20px;
              display: none;
    } 
    .triangle{
        width: 15px;
        box-shadow:inset -1px -1px #0a0a0a,inset 1px 1px silver,inset -2px -2px grey,inset 2px 2px silver;
        height: 15px;
        z-index: -1;
        background: silver;
        transform: rotate(45deg);
        margin: auto;
        margin-top: 17px;
    }
    .span_kontakt{
        color: #969eff;
        cursor: pointer;
        border-bottom: 2px solid #969eff;
    }
    #span_bezposrednio{
        display: none;
    }
    #x_icon{
       position: static;
        display: none;
        cursor: pointer;
        margin-left: 31vw;
    }
     @media only screen and (max-width: 800px) {
         #x_icon{
             margin-left: 29vw;
             margin-top: 3vh;
         }
}
    #rozwin{
        height: 18.5vh;
        transition: all 0.4s ease;
    }
    #h1_rozwin{
        margin-top: 8vh;
        margin-left: 0.75vw;
    }
    #rozwin:hover{
        color: #208c71;
        background: #fff;
    }
    .ua{
        background: #888;
        height: auto;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 1000;
        width: 100%;
        text-align: center;
        padding-top: 13px;
        font-size: 16px;
        padding-bottom: 13px;
    }
    .span_ua{
        color: #0000ff;
        cursor: pointer;
    }
</style>
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
      <button aria-label="Minimize"></button>
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
       <div class="ua" id="ua">Uwaga! Rząd Kazachstanu, oraz podmiot kontroli obywateli "kazachstan.net" nie wspierają działan wojskowych rosjan na terenach Ukrainy. <span class="span_ua" onclick="ua_hide()">zamknij</span></div>
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
        <input type="search" placeholder="Szukaj..." name="szukane" maxlength="20" spellcheck="false" pattern="[A-Za-z0-9_ąćęłńóśźżĄĆĘŁŃÓŚŹŻ]+">
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
    $polaczenie = @ new mysqli($host, $db_user, $db_password, $db_name);
    $sort = $_GET['lista'] ?? 'domyslnie'; 
       if(isset($_GET['szukane'])){
               $szukane = explode(' ', $_GET['szukane']) ?? null;
       }
       if($szukane != null){
           for($i = 0; $i<count($szukane); $i++){
        $search = "'%".$szukane[$i]."%'";
    $sql = "SELECT * FROM obywatele WHERE imie LIKE $search or nazwisko LIKE $search or id LIKE $search";
        mysqli_set_charset($polaczenie, "utf8");
        $result = mysqli_query($polaczenie, $sql);
        $wyniki = mysqli_num_rows($result);
           if($wyniki>0){
         echo '<span class="wyniki2">'.'Wyniki: '.$wyniki.'</span>';
             while($row = mysqli_fetch_array($result)){
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
        $result = mysqli_query($polaczenie, $sql);
        if($wiecej != 'True'){
            for($i = 1; $i <= 14; $i++){
                   $row = mysqli_fetch_array($result);
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
           while($row = mysqli_fetch_array($result)){
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
        elseif($sort == 'najlepszy'){
            $sql = "SELECT * FROM obywatele ORDER BY suma_ocen/ilosc_ocen DESC";
            $result = mysqli_query($polaczenie, $sql);
        if($wiecej != 'True'){
            for($i = 1; $i <= 14; $i++){
                   $row = mysqli_fetch_array($result);
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
           while($row = mysqli_fetch_array($result)){
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
    else{
        $sql = "SELECT * FROM obywatele ORDER BY id ASC";
        $result = mysqli_query($polaczenie, $sql);
        if($wiecej != 'True'){
            for($i = 1; $i <= 14; $i++){
                   $row = mysqli_fetch_array($result);
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
           while($row = mysqli_fetch_array($result)){
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
    } 
               echo '<div class="karta col-md-3" id="karta-kontakt">
        <h3>Zauważyłes buga na stronie? Chcesz wsypac swojego sąsiada? Napisz do nas przez<br /> <a class="a-uwaga" href="uwaga.php" target="_blank">formularz kontaktowy</a>, lub skontaktuj sie z nami <span class="span_kontakt" onclick="wysun_kontakt()">bezposrednio</span><span id="span_bezposrednio"><br /> <i class="icon-mail"></i> - kazachstan @ gov.kz<br /><br /><i class="icon-info"></i> - Plac Lenina 12, Astana</span></h3><img src="x.png" height="20px" width="20px" id="x_icon" onclick="schowaj_kontakt()">
                 </div>'.'<br />'.'<br />';
       }
       ?>
     <?php
                if($_SESSION['expire'] < $_SESSION['time']){
                        session_destroy();
                    }
    ?>
    </div>
</body>
</html>
