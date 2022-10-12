<!-- Create a script to construct the following pattern, using nested for loop. -->
<?php
    // $a = 1;
    // $b = 0;
    for($a=1;$a<=5;$a++){
       for ($b=1;$b<$a;$b++){
         echo "*";
            if($b> $a){
               echo " ";
             }
        }echo "<br>";
    }
?>