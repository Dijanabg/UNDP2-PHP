<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Write a PHP script to find the maximum and minimum marks from the following set of arrays. 
Sample arrays :
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
Expected Output :
Maximum marks : 635
Minimum marks : 111*/

    $marks1 = array(360, 310, 310, 330, 313, 375, 456, 111, 256);
    $marks2 = array(350, 340, 356, 330, 321);
    $marks3 = array(630, 340, 570, 635, 434, 255, 298);
    $max_marks = max(max($marks1), max($marks2), max($marks3));
    $min_marks = min(min($marks1), min($marks2), min($marks3));
    echo "Maximum marks : " . $max_marks . "<br>";
    echo "Minimum marks : " . $min_marks . "<br>";

    /*Write a PHP script which rounds the following values with 1 decimal digit precision. 
Sample values and Output :
1.65 --> 1.7
1.65 --> 1.6
-1.54 --> -1.5*/

    $a = 1.65;
    echo round(1.65, 1, PHP_ROUND_HALF_UP) . "<br>";   //  1.7
    echo round(1.65, 1, PHP_ROUND_HALF_DOWN) . "<br>"; //  1.6
    echo round(-1.54, 1, PHP_ROUND_HALF_EVEN) . "<br>";


    /*Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy.
Sample date : 2012-09-12
Output: 12-09-2012*/
    $olddate = "2012-09-12";
    $newDate = date("d-m-Y", strtotime($olddate));
    echo $newDate . "<br>";

    /*Write a PHP script to get the information
regarding memory usage in KB or MB etc.*/
    $memory_size = memory_get_usage();
    $memory_unit = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB');
    // Display memory size into kb, mb etc.
    echo 'Used Memory : ' . round($memory_size / pow(1024, ($x = floor(log($memory_size, 1024)))), 2) . ' ' . $memory_unit[$x] . "<br>";

    /*Find earliest and latest dates from a list of dates.*/
    $dates = array('2015-02-01', '2015-02-02', '2015-02-03');
    echo "Latest Date: " . max($dates) . "<br>";
    echo "Earliest Date: " . min($dates) . "<br>";

    /*Write a PHP function to round a float away from zero to a specified number of decimal places. Go to the editor
Sample Data :
(78.78001, 2)
(8.131001, 2)
(0.586001, 4)
(-.125481, 3)
-.125481
Sample Output :
78.79
8.14
0.5861
-0.126
-1*/
    function zaokruzi($value, $places = 0)
    {
        if ($places < 0) {
            $places = 0;
        }
        $x = pow(10, $places);
        return ($value >= 0 ? ceil($value * $x) : floor($value * $x)) / $x;
    }
    echo zaokruzi(78.78001, 2) . "<br>";
    echo zaokruzi(8.131001, 2) . "<br>";
    echo zaokruzi(0.586001, 4) . "<br>";
    echo zaokruzi(-.125481, 3) . "<br>";
    echo zaokruzi(-.125481) . "<br>";

    /*Write a PHP function to create a human-readable random string for a captcha. 
Sample Output :
hoboh
tynzh*/
    function random_string($length = 5)
    {
        $chars = 'bcdfghjklmnpqrstvwxyzaeiou';
        $result = "";
        for ($x = 0; $x < $length; $x++) {
            $result .= ($x % 2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
        }

        return $result;
    }
    echo random_string();
    echo "<br>";


    ?>
</body>

</html>