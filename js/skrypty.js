$( function() {
    $( "#window" ).draggable();
  } );
$( function() {
    $( "#window1" ).draggable();
  } );
        $( function() {
    $( "#window2" ).draggable();
  } );
           $( function() {
    $( "#window3" ).draggable();
  } );
        $( function() {
    $( "#window4" ).draggable();
  } );
  $( function() {
    $( "#window5" ).draggable();
  } );
        $( function() {
    $( "#window6" ).draggable();
  } );
 $( function() {
    $( "#window7" ).draggable();
  } );
 $( function() {
    $( "#window8" ).draggable();
  } );
function startTime() {
  var today = new Date();
  let h = today.getHours();
 let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =  h + ":" + m + ':' + s;
  setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
function startTime2() {
  var today2 = new Date();
  let h2 = today2.getHours();
 let m2 = today2.getMinutes();
  let s2 = today2.getSeconds();
  m2 = checkTime(m2);
  s2 = checkTime(s2);
if(h2 > 12){
    h2 = h2-12;
       document.getElementById('time2').innerHTML =  h2 + ":" + m2 + ':' + s2 + ' PM';      
           }
    else{
        document.getElementById('time2').innerHTML =  h2 + ":" + m2 + ':' + s2 + ' AM';     
    }
  setTimeout(startTime2, 1000);
}
function komentarz(){
  document.getElementById("window5").style.display = 'block';
}
function komentarz_max(){
    // MOŻLIWE ŻE NIE DZIAŁA NA WSZYSTKICH ROZDZIELCZOŚCIACH - DO SPRAWDZENIA
    if(document.getElementById(arguments[0]).style.transform >= 'scale(1.3)'){
        document.getElementById(arguments[0]).style.transform = '';
    }
    else{
      var x = window.matchMedia("(min-width: 1500px)");
      if (x.matches){
        document.getElementById(arguments[0]).style.transform = 'scale(1.5)';  
      }
      else{
        document.getElementById(arguments[0]).style.transform = 'scale(1.3)';  
      }
    }
}
function komentarz_close(){
  document.getElementById("window5").style.display = 'none';
}
        function error_close(){
  document.getElementById("window6").style.display = 'none';
}
function pokaz_pm(){
    document.getElementById("time2").style.display = "block";
    document.getElementById("time").style.display = "none";
}
function ukryj_pm(){
    document.getElementById("time2").style.display = "none";
    document.getElementById("time").style.display = "block";
}
function menu_start(){
    var x = window.getComputedStyle(document.getElementById("ms"), null).display;
    if(x == "none"){
         $("#ms").fadeIn(200);
    }
    if(x == "block"){
       $("#ms").fadeOut(200);
    }
}