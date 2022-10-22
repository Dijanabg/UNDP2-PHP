<?php


//Matematicke funkcije
//https://www.php.net/manual/en/book.math

//stepenovanje
echo "Stepen <br>";
echo pow(7, 3); // 2 na 7
echo "<br>";

function stepen($broj, $stepen)
{
    $ukupno = 1;
    for ($i = 0; $i < $stepen; $i++) {
        $ukupno *= $broj;
    }
    return $ukupno;
}
echo stepen(7, 3);
echo "<br>";

//radnom broj
echo "<br>Random broj <br>";
echo rand();
echo "<br>Random broj od broja do broja <br>";
echo rand(1, 100);
echo "<br>";

//korenovanje
echo "<br>Koren nekog broja<br>";
echo sqrt(100);
echo "<br>";
echo sqrt(99);
echo "<br>";

//zaokruzivanje brojeva
echo "<br>Zaokruzivanje na veci broj<br>";
echo ceil(4.2);
echo "<br>";

echo "<br>Zaokruzivanje na manji broj<br>";
echo floor(4.2);
echo "<br>";
echo floor(4.9);
echo "<br>";

echo "<br>Zaokruzivanje brojeva<br>";
echo round(4.2);
echo "<br>";
echo round(4.5);
echo "<br>";
echo round(4.9);
echo "<br>";

echo "<br>Zaokruzivanje decimala<br>";
echo round(4.256245, 2);
echo "<br>";


//PHP_ROUND_HALF_UP	    Zaokruzuje broja na dalji broj od 0, pretvarajući 1.5 u 2 i -1.5 u -2.
//PHP_ROUND_HALF_DOWN	Zaokruzuje broja na blizi broj do 0, pretvarajući 1.5 u 1 i -1.5 u -1.

//PHP_ROUND_HALF_EVEN	Zaokruzuje broja na najblizi paran broj, pretvarajući oba 1.5 i 2.5 u 2.
//PHP_ROUND_HALF_ODD	Zaokruzuje broja na najblizi neparan broj, pretvarajući 1.5 u 1 i 2.5 u 3.