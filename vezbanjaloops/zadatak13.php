<!-- Write a PHP program to print alphabet pattern 'A'. -->
<?php
for ($row = 0; $row <= 6; $row++) {
    for ($column = 0; $column <= 6; $column++) {
        if ((($column == 1 || $column == 5) && $row != 0) || (($row == 0 || $row == 3) && ($column > 1 && $column < 5))) {
            echo "*";
        } else {
            echo "x";
        }
    }
    echo "<br>";
}


?>