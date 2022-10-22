<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Univerzitet u Beogradu</title>
</head>

<body>
    <h1>Fakultet organizacionih nauka</h1>
    <h2>Odsek za softversko inzenjerstvo</h2>
    <?php
    echo "<php>Ovde cemo nauciti PHP</php>"
    ?>
    <p>Neki tekst napisan u HTML-u</p>
    <br>
    <hr><br>
    <!-- beline se zanemaruju, komentar ispis -->
    <?php
    echo '<h1>Dobrodosli u PHP</h1>'; //komentar
    echo '<h1>Dobrodosli        u       
    PHP </h1> '; #komentar
    echo 'Dobrodosli ';
    echo 'na FON! ';
    echo 'Dobrodosli ';
    echo 'na FON!';
    echo "<br><br>";
    /* primer
    viserednog
    komentara*/
    ?>
    <?php
    //promenljiva unutar navodnika se izvrsava
    $a = 17;
    echo "Ona ima $a godina";
    echo "<br>";
    //promenljiva unutar apostrofa se ne izvrsava
    echo 'Ona ima $a godina';
    echo "<br>";
    //mogu se koristiti
    echo 'zdravo';
    echo "<br>";
    echo 'zdravo ', 'pozdrav';
    echo "<br>";
    echo ('zdravo');
    echo "<br>";
    print 'zdravo';
    echo "<br>";
    print('zdravo');
    echo "<br><br>";
    ?>
    <?php
    //heredoc sintaksa
    $heredoc = <<<DIJANA
        ovo je prvi red 
        ovo je drugi red
        ovo je treci red
    DIJANA;
    echo "$heredoc";
    echo "<br>";
    ?>
    <?php
    $ime = "Dijana"; //string
    $broj = 10; //broj je integer
    $broj = "Desetka"; //broj je sada string
    //primer
    $broj = 10;
    $realBroj = (float)$broj * 2.15;
    echo "$broj je broj, a $realBroj je float broj";
    echo "<br><br>";
    //promenljiva promenljive
    $ocena = "deset";
    $$ocena = 10;
    echo "$deset";
    echo "<br><br>";
    ?>



    <?php
    //operatori nadovezivanja
    $a = "Petar";
    $b = 'casove';
    $rezultat = $a . " drzi " . $b . "!";
    echo "$rezultat";
    echo "<br><br>";
    //operatori dodele
    $b = 6 + ($a = 5);
    echo "$b";
    echo "<br><br>";
    //operatori ++ i --
    $a = 5;
    $b = $a++;
    echo $a; //6
    echo "<br>";
    echo $b; //5
    echo "<br><br>";
    //uslovni operator
    //uslov?uslov_true : uslov_false
    //($ocena > 5 ? 'polozio' : 'pao');
    ?>

</body>

</html>