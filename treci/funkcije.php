<?php

function prebroj($niz){
    $brojac = 0;
    foreach($niz as $element){
        $brojac++;
    }
    return $brojac; //povratna vrednost

}

$niz_brojeva = [1,3,5,7,9];
echo prebroj($niz_brojeva);
echo "<br>";
echo count($niz_brojeva);


function is_empty_c($niz){
    if(prebroj($niz)==0){
        echo "Niz je prazan <br>";
    }else{
        echo "Niz nije prazan <br>";
    }
}

is_empty_c($niz_brojeva);
is_empty_c([]);

//primer sa podrazumevanim (default) vrednostima

function pozdrav($poz="Zdravo"){
    echo "$poz <br>";
}
pozdrav();
pozdrav("Hello");

//primer default(optional) i obavezni (mandatory)
function pozdrav1($ime, $poz="Zdravo"){
    echo "$poz $ime! <br>";
}
pozdrav1("Tamara", "Hello");
pozdrav1("Tamara");


//primer imenovanih parametara
function pozdrav2($ime, $poz="Zdravo", $por="Danas je lep dan!<br>"){
    /**
     * @param ime, poz, por
     * mogu se imenovano proslediti
     * ime je obavezan parametar
     */
    echo "$poz $ime! <br>";
    echo $por;
}

pozdrav2(ime:"Petar",por:"Danas je suncan dan! <br>", poz:"Hello");

// nepoznat broj parametara
// otpakivanje nizova

function suma(...$brojevi){
    $ukupno = 0;
    foreach($brojevi as $br){
        $ukupno+=$br;
    }
    return $ukupno;
}

echo suma(1,2,3,4);

function ispis_osobe($ime, $prezime, $adresa){
    echo "$ime $prezime zivi na adresi $adresa";
}

ispis_osobe("Tamara", "Naumovic", "Jove Ilica 154");
$osoba = ["Tamara", "Naumovic", "Jove Ilica 154"];
ispis_osobe(...$osoba);

?>