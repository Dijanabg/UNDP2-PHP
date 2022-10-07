<?php

// echo "Zdravo!";
// CTRL + K + C - napravi komentar
// CTRL + K + U - obrisi komentar

$ime = "Tamara"; //string niz karaktera
$prezime = "Naumovic";
$godine = 28; // broj - int/float 
$zaposlenost = true; //bool(ean) true/false
//indeksirani nizovi
// brojanje elemenata pocinje od 0
$adresa = ["Jove Ilića", 54, "Beograd", 11000, "Srbija"];  // indeksirani niz
//  [0 -"Jove Ilića", 1 - 54, 2-"Beograd", 3-11000];
// echo $adresa[3]; //pristupanje preko indeksa


//asocijativni niz => kljuc-vrednost parovi (key-value pairs)
$osoba = array(
    "ime" => $ime,
    "prezime" => $prezime,
    "godine" => $godine,
    "zaposlenost" => $zaposlenost,
    "adresa" => array(
        "ulica"=>$adresa[0],
        "broj"=>$adresa[1],
        "grad"=>$adresa[2],
        "ZIP"=>$adresa[3]
    ),
    "poslednja_primanja"=>[50000,60000,70000]
    );

    // echo $osoba["prezime"];

    // print_r( $osoba['poslednja_primanja'][2]);

    //for petlja
    for($brojac=0; $brojac<10; $brojac++){
        echo "Brojac je: $brojac ";
    }
    echo "<br>"; //br HTML tag za breakline i prelazak u novi red
    // echo "<br> Brojac je ostao: $brojac";

    for($brojac=0;$brojac<count($adresa);$brojac++){
        echo "Adresa sadrzi: $adresa[$brojac] <br>";
    }

    foreach($osoba as $element){
        if(is_array($element)){
            //$element jeste niz
            foreach($element as $pod_element){
                echo $pod_element."<br>";
            }
        }else{
            //ako nije niz
            print_r($element);
            echo "<br>";
        }
        
    }
    // print_r($element);
    // echo "<br> Brojac je ostao: $brojac";

    for($i = 0; $i<50;$i++){
        if($i>5 && $i<15){
            echo "Broj $i je veci od 5 <br>";
        }elseif($i==15 || $i>15 ){
            echo "Broj $i je veci od 15 <br>";
        }else{
            echo "Broj $i je manji od 15 <br>";
        }
    }

$brojac = 0;
for($brojac; $brojac<50;$brojac++){
    echo "broj $brojac > ";
    switch($brojac){
        case $brojac%2==0:
            echo "Paran broj $brojac <br>";
            break;
        case $brojac%3==0:
            echo "Broj $brojac je deljiv sa 3 <br>";
            break;
        case $brojac%4==0:
            echo "Broj $brojac je deljiv sa 4 <br>";
            break;
        default:
            echo "Broj je neparan <br>";
    }
}





?>