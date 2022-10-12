<!-- Write a program which will count the "r" characters in the text "w3resource" -->

<?php
    $tekst = "w3resourse";
    $slovo = "r";
    $count = 0;
    $i = 0;
    for($i; $i< strlen($tekst); $i++){
        if(substr($tekst, $i, 1)==$slovo){
            $count = $count + 1;
        }
    }echo $count."<br>";
?>