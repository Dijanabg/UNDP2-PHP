<?php
// $spoljni=0;
// $unutrasnji=0;
// for($spoljni;$spoljni<10;$spoljni++){

//     for($unutrasnji;$unutrasnji<10;$unutrasnji++){
//         echo "$spoljni$unutrasnji,";

//     }
//     if($unutrasnji==10){
//         $unutrasnji=0;
//     }
// }
//indeksirani nizovi
$niz_brojeva = [1, 2, 3, 4, 5, 6];
/**
 * niz_brojeva = array(
 * 0=>1,
 * 1=>2,
 * 2=>3,
 * 3=>4,
 * 4=>5,
 * 5=>6
 * )
 */
//asocijativni nizovi
$osoba = array(
    "ime" => "Tamara",
    "prezime" => "Naumovic",
    "zaposlenost" => true,
    "godina_rodjenja" => 1994
);

echo $niz_brojeva[4];
echo "<br> " . $osoba['ime'] . "<br>";

$niz_brojeva[] = 15;
echo $niz_brojeva[count($niz_brojeva) - 1];

$osoba["adresa"] = array(
    "ulica" => "Jove Ilica",
    "broj" => 154,
    "grad" => "Beograd"
);
echo "<br>" . $osoba["adresa"]["ulica"];

var_dump(array_key_exists("adresa", $osoba)); //za proveru kljuceva da li postoje u nizu
var_dump(array_key_exists(10, $niz_brojeva));
echo "<br>";
echo 'Da li postoji: ' . in_array("Tamara", $osoba) . '<br>';
echo 'Da li postoji: ' . in_array("tamara", $osoba, true) . '<br>';
echo 'Da li postoji: ' . in_array("1994", $osoba, true) . '<br>';
//dodavanje na niz
$rez = array_push($niz_brojeva, 222);
print_r($niz_brojeva);
echo "<br> $rez";
$rez_a = array_push($osoba, "FON");
print_r($osoba);
//sklanjanje sa niza
$poslednji_broj = array_pop($niz_brojeva);
echo "<br> $poslednji_broj";
unset($niz_brojeva[2]);
print_r($niz_brojeva);
$ime = "Tamara";
echo $ime . "<br>";
unset($ime);

echo "<hr>";

//sortiranje

$niz_brojeva[] = 15;
$niz_brojeva[] = 115;
$niz_brojeva[] = 18;
$niz_brojeva[] = -15;
$niz_brojeva[] = -222;
print_r($niz_brojeva);
//indeksirani nizovi
sort($niz_brojeva);
echo "<br>";
print_r($niz_brojeva);
//asocijativni nizovi
asort($osoba);
echo "<br>";
print_r($osoba);
ksort($osoba);
echo "<br>";
print_r($osoba);

//multidimenzionalni nizovi
$osobe = array(
    "studenti" => array(
        "prva_godina" => array(
            array(
                "ime" => "Tamara",
                "prezime" => "Naumovic",
                "indeks" => 5005,
                "godina" => 2018
            ),
            array(
                "ime" => "Milica",
                "prezime" => "Simic",
                "indeks" => 5012,
                "godina" => 2018
            ),
        ),
        "druga_godina" => array(
            array(
                "ime" => "Petar",
                "prezime" => "Lukovac",
                "indeks" => 5001,
                "godina" => 2019
            ),
            array(
                "ime" => "Aleksa",
                "prezime" => "Miletic",
                "indeks" => 5013,
                "godina" => 2019
            )
        )
    ),
    "nastavnici" => array(
        "profesori" => array(
            array(
                "ime" => "Zorica",
                "prezime" => "Bogdanovic"
            ),
            array(
                "ime" => "Aleksandra",
                "prezime" => "Labus"
            )
        ),
        "asistenti" => array(
            array(
                "ime" => "Milica",
                "prezime" => "Petrovic"
            ),
            array(
                "ime" => "Nemanja",
                "prezime" => "Kojic"
            )
        )
    )
);
echo "<hr>";
// print_r($osobe["studenti"]["prva_godina"][1]);

foreach ($osobe["studenti"]["prva_godina"] as $student) {
    echo "ime: " . $student['ime'];
    echo "<br> prezime: " . $student['prezime'] . "<br>";
}

foreach ($osobe["studenti"]["prva_godina"] as $student) {
    foreach ($student as $key => $val) {
        echo $key . " : " . $val . "<br>";
    }
}

echo "<hr>";
$niz_indeksa = [];
foreach ($osobe["studenti"]["druga_godina"] as $student) {
    echo $student["indeks"] . "<br>";
    $niz_indeksa[] = $student["indeks"];
}

print_r($niz_indeksa);

//ugradjena funkcija za vracanje pod_nizova iz nekog assoc niza
$niz_indeksa_u = array_column($osobe["studenti"]["druga_godina"], "indeks");
print_r($niz_indeksa_u);
$niz_indeksa_u = array_column($osobe["studenti"]["druga_godina"], "prezime", "indeks");
print_r($niz_indeksa_u);
$niz_kljuceva = ["ime", "prezime", "indeks", "godina"];
$novi_student = ["Petar", "Petrovic", 5022, 2018];
$student_assoc = array();
for ($i = 0; $i < count($niz_kljuceva); $i++) {
    $student_assoc[$niz_kljuceva[$i]] = $novi_student[$i];
}
echo "<hr>";
print_r($student_assoc);
$novi_student1 = ["Nikola", "Novakovic", 5025, 2018];
$student_assoc1 = array_combine($niz_kljuceva, $novi_student1);
print_r($student_assoc1);
$osobe["studenti"]["druga_godina"][] = $student_assoc;
$osobe["studenti"]["druga_godina"][] = $student_assoc1;

echo "<pre>" . print_r($osobe["studenti"]["druga_godina"], true) . "</pre>";

echo "<hr>";
//operacije nad skupovima
//razlika skupova
$niz1 = array("a" => "crvena", "b" => "zelena", "c" => "plava");
$niz2 = array("a" => "crvena", "b" => "zelena", "c" => "plava", "d" => "zuta");
print_r(array_diff($niz2, $niz1)); //uporedjuje po vrednostima
print_r(array_diff_assoc($niz2, $niz1)); // uporedjuje po kljucevima i vrednostima
print_r(array_diff_key($niz2, $niz1)); // uporedjuje po kljucevima
echo "<br>";
// zamena mesta kljuc=>vrednost === vrednost=>kljuc
// print_r(array_flip($niz1));

print_r($osoba);
$osoba["posao"] = $osoba[0];
unset($osoba[0]);
echo "<br>";
ksort($osoba);
print_r($osoba);

//presek skupova
echo "<br>";
print_r(array_intersect($niz2, $niz1)); //vrednostima
print_r(array_intersect_assoc($niz2, $niz1)); //kljucevi i vrednostima
print_r(array_intersect_key($niz2, $niz1)); //kljucevi i vrednostima

//merge
print_r(array_merge($niz1, $niz2));

echo "<hr>";
//vratimo kljuceve
print_r(array_keys($osobe["studenti"]["druga_godina"][0]));
//vratim vrednosti
print_r(array_values($osobe["studenti"]["druga_godina"][0]));

function kvadrati($x)
{
    return ($x * $x);
}
$niz_kvadrata = [];
for ($i = 1; $i < 10; $i++) {
    $niz_kvadrata[] = kvadrati($i);
}
echo "<br>";
print_r($niz_kvadrata);
$a = range(1, 10, 2);
print_r(array_map("kvadrati", $a));

echo sizeof($niz_kvadrata) == count($niz_kvadrata);
