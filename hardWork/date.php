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
    /*Write a PHP script which will display the copyright information in the following format. To get current year you can use the date() function. Go to the editor
Expected Format : © 2013 PHP Exercises - w3resource*/
    echo "@" . date('Y');
    echo "<br>";

    /*Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday.*/
    $target_days = mktime(0, 0, 0, 01, 22, 2023); // date of next birthday
    $today = time();
    $diff_days = ($target_days - $today);
    $days = (int)($diff_days / 86400);
    print "Days till next birthday: $days days!";
    echo "<br>";

    /*Write a PHP script to print the current date in the following format. To get current date's information you can use the date() function.
Sample format : (assume current date is September 01, 2013)
2013/09/01
13.09.01
01-09-13*/
    echo date("Y/m/d") . "<br>";
    echo date("y.m.d") . "<br>";
    echo date("d-m-y") . "<br>";

    /*Write a PHP script to calculate the difference between two dates. 
Sample dates : 1981-11-04, 2013-09-04
Expected Result : 31 years, 10 months, 11 days*/
    $date1 = "1981-11-04";
    $date2 = "2013-09-04";
    $date_diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($date_diff / (365 * 60 * 60 * 24));
    $months = floor(($date_diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($date_diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    printf("%d years, %d months, %d days", $years, $months, $days);
    echo "<br>";

    /*Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy. Go to the editor
Sample date : 2012-09-12
Expected Result : 12-09-2012*/
    $olddate = "2012-09-12";
    $newDate = date("d-m-Y", strtotime($olddate));
    echo $newDate;
    echo "<br>";

    /*Write a PHP script to convert the date to timestamp. Go to the editor
Sample date : 12-05-2014
Expected Result : 1399852800*/
    echo strtotime('12-05-2014');
    echo "<br>";


    /*Write a PHP script to calculate a number of days between two dates*/
    $to_date = time(); // Input your date here e.g. strtotime("2014-01-02")
    $from_date = strtotime("2022-01-31");
    $day_diff = $to_date - $from_date;
    echo floor($day_diff / (60 * 60 * 24));
    echo "<br>";

    /*Write a PHP script to check whether the given dates are valid or not?*/
    var_dump(checkdate(2, 30, 2022));
    var_dump(checkdate(2, 29, 2024));
    echo "<br>";

    /*Write a PHP script to check whether a date is a weekend or not*/
    $dt = '2022-01-04';
    $dt1 = strtotime($dt);
    $dt2 = date("l", $dt1);
    $dt3 = strtolower($dt2);
    if (($dt3 == "saturday") || ($dt3 == "sunday")) {
        echo $dt3 . ' is weekend' . "\n";
    } else {
        echo $dt3 . ' is not weekend' . "\n";
    }
    echo "<br>";
    ?>
</body>

</html>