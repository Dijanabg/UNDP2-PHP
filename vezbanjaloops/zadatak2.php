<!--2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.  -->
<?php
    $x = 1;
    $sum = 0;
    for($x; $x <= 30; $x++){
        if($x <=30){
            $sum += $x;
        }
    }
    echo "Total je:  $sum";
?>