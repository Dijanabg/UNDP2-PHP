<!--Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format  -->

<?php
//    $a = 0;
//    $b = 0;
for ($a = 0; $a < 10; $a++) {
    for ($b = 0; $b < 10; $b++) {
        echo $a . $b . ",<br>";
    }
}

?>