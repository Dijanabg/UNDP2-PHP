<!-- Create a script to construct the following pattern, using a nested for loop. -->
<?php
   
    for($a=1;$a<=5;$a++){
       for ($b=1;$b<$a;$b++){
         echo "*";
            if($b> $a){
               echo " ";
             }
        }echo "<br>";
      }
    for($a=$b;$a>=1;$a--){
        for ($b=1;$b<=$a;$b++){
          echo "*";
         }echo "<br>";
     }
   
?>