<?php
/*function nazivFunkcije($prviParametar, $drugiParametar, ...)
{
    //kod koji funkcija izvrsava
}*/

//PHP je  Loosely Typed Language što znači da promenljive ne moraju da se definišu i ne definišemo im tip!

//FUNKCIJE
function sabiranje()
{
    echo 'Funkcija za sabiranje! <br>';
}
sabiranje();
SABIRANJE();
Sabiranje();
echo "<br>";

function sabiranje2Broja()
{
    return 2 + 3;
}
echo sabiranje2Broja();
echo "<br>";

function sabiranje2BrojaKrozParametre($a, $b)
{
    return $a + $b;
}
echo sabiranje2BrojaKrozParametre(3, 4);
echo "<br>";

function sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima($a = 10, $b = 15)
{
    return $a + $b;
}
echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima();
echo "<br>";

echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(3);
echo "<hr>";

//https://www.php.net/manual/en/functions.arguments.php
echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(b: 3);
echo "<br>";

echo sabiranje2BrojaKrozParametreSaPredefinisanimVrednostima(3, 4);
echo "<br>";
echo "<br>";


function ispisiSveBrojeve(...$rest)
{
    foreach ($rest as $item) {
        echo $item . ",";
    }
}

function saberiSveBrojeve(...$rest)
{
    $ukupno = 0;
    foreach ($rest as $item) {
        $ukupno += $item;
    }
    echo $ukupno;
}

ispisiSveBrojeve(1, 2, 3, 4, 5, 10);
echo "<br>";
saberiSveBrojeve(1, 2, 3, 4, 5, 10);
