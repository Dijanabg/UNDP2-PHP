<?php
$proizvodi = array(
    array(
        "id" => 1,
        "naziv" => "Laptop",
        "cena" => 1000,
        "kolicina" => 65
    ),
    array(
        "id" => 2,
        "naziv" => "Monitor",
        "cena" => 350,
        "kolicina" => 34
    ),
    array(
        "id" => 1,
        "naziv" => "Tastatura",
        "cena" => 200,
        "kolicina" => 47
    ),
);
function vratiPDV($cena)
{
    $pdv = $cena * 0.2;
    return $pdv;
}
// function ispisiRabat($kolicina)
// {
//     $rabat = 0;
//     if ($kolicina < 40) {
//         $rabat = 2;
//     } elseif ($kolicina  < 50) {
//         $rabat = 3;
//     } else
//         $rabat = 5;
//     return $rabat;
// }
function ispisiRabat($kolicina)
{
    if ($kolicina < 40)
        return 2;

    if ($kolicina  < 50)
        return 3;

    return 5; //ako je jedna naredba iza if-a ne moraju {}
}
/*--za kolicinu ispod 40 rabat 2,
                    iznad 40 i ispod 50 rabat 3,
                    iznad 50 rabat 5->*/
function ukupnaCena($cena, $kolicina)
{
    $iznosPDV = vratiPDV($cena);
    $cenaSaPDV = $cena + $iznosPDV;
    $iznos = $cenaSaPDV * $kolicina;
    $iznosRabata = $iznos  * ispisiRabat($kolicina) / 100;
    return  $iznos - $iznosRabata;
}
function ukupno()
{
    global $proizvodi;
    $suma = 0;
    foreach ($proizvodi as $artikal) :
        $suma += ukupnaCena($artikal["cena"], $artikal["kolicina"]);

    endforeach;
    return $suma;
}
