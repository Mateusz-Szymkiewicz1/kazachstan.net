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