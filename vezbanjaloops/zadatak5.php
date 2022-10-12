<!-- Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24. -->
<?php
    $x = 1;
    $n = 5;
    $i = 0;
    for($i; $i <= $n-1; $i++){ 
        $x = $x * ($i+1);
    }
    echo "Faktorijel broja 5 je: $x";
?>