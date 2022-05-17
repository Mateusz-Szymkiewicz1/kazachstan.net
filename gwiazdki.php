<?php
if($row['suma_ocen'] != 0 and $row['ilosc_ocen'] != 0){
    $ocena = $row['suma_ocen']/$row['ilosc_ocen'];
if($ocena > 4.5){
    echo '<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>';
}
else if($ocena > 3.5){
    echo '<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star-empty"></i>';
}
else if($ocena > 2.5){
    echo '<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>';
}
else if($ocena > 1.5){
    echo '<i class="icon-star"></i>'.'<i class="icon-star"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>';
}
else if($ocena >= 1.0){
    echo '<i class="icon-star"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>';
}
else{
    echo '<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'.'<i class="icon-star-empty"></i>'; 
}
}
else{
    echo ' Brak Ocen ;/'; 
}
?>