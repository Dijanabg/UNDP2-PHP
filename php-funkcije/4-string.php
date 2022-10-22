<?php
//https://www.w3resource.com/php-exercises/php-string-exercises.php#editorr

//strtoupper i strtolower
$malaSlova = 'ova recenica je napisana malim slovima.';
echo $malaSlova;
echo "<br/>";
$velikaSlova = strtoupper($malaSlova);
echo $velikaSlova;
echo "<br/>";
echo strtolower($velikaSlova);
echo "<br/>";
$bend = "the beatles";
echo ucfirst($bend) . "<br/>";
echo ucwords($bend) . "<br/>";

//strlen
echo "<br><br>";
$recenica = 'Reprezentacija Srbije ide na evropsko prvensto u fudbalu!';
$brojSlova = strlen($recenica);
echo "Recenica: '$recenica' ima: $brojSlova karakter <br>";

//strpos
echo "<br><br>";
$recenica2 = 'Reprezentacija Srbije posle 20 godina ide na evropsko prvensto u fudbalu!';
// Indeks reci '20'
echo 'Pozicija: ' . strpos($recenica2, 'Srbije');
echo "<br/>";
// Pocni pretragu od 25og indeksa
echo 'Pozicija: ' . strpos($recenica2, 'ij', 14);
echo "<br/>";
// Nije pronadjeno
echo 'Pozicija: ' . strpos($recenica2, 'Srbija');

//str_replace
echo "<br><br>";
$recenica3 = 'on i samo on.';
$nakonIzmene = str_replace('on', 'oni', $recenica3, $brojZamena);
echo "Nakon izmene: '$nakonIzmene' broj zamena: $brojZamena";

//substr
echo "<br><br>";
$recenica4 = 'Testiranje funkcije substr() u php-u.';
echo substr($recenica4, 4); //prekoči prva 4 karaktera (kreni od 4. indeksa)
echo '<br/>';
echo substr($recenica4, -4); //uzmi poslednja 4 karaktera ()
echo '<br/>';
echo substr($recenica4, 4, 15); //kreni od 4. indeksa i uzmi narednih 15 karaktera
echo '<br/>';
echo substr($recenica4, 4, -5); //kreni od 4. indeksa i stani na 5. elementu od pozadi

//str_split
echo "<br><br>";
$recenica5 = 'Testiranje funkcije str_split() u php-u.';
$nizKaraktera = str_split($recenica5); //podeli recenicu tako da svaki element bude 1 karakter
echo "<br/>Prikaz prvog niza<br/>";
print_r($nizKaraktera);
$nizKaraktera = str_split($recenica5, 8); //podeli recenicu tako da svaki element ima max 8 karaktera
echo "<br/>Prikaz drugog niza<br/>";
print_r($nizKaraktera);

//str_starts_with
echo "<br><br>";
$recenica6 = 'Danas je lep dan.';
echo str_starts_with($recenica6, "Danas"); // vraca true i false

//str_ends_with
echo "<br>";
$recenica6 = 'Danas je lep dan.';
echo str_ends_with($recenica6, "."); // vraca true i false

//explode
echo "<br><br>";
$recenica7 = 'Razdvoji recenicu na delove.';
print_r(explode(" ", $recenica7));





echo "<br><br>";
$recenicaZaVezbanje = "Blago onom ko se tuđom štetom opameti, a teško onom koji svojom mora.";
$recenicaZaVezbanje2 = "Blago onom ko se tudom stetom opameti, a tesko onom koji svojom mora.";
$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry! Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged? It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
//Vezbanje

//Kreirati funkciju koja proverava da li postoji paran broj karaktera u rečenici.
function paranBrojKaraktera($recenica)
{
    if (strlen($recenica) % 2 == 0) {
        return "true";
    }
    return "false";
}
//Kreirati funkciju koja proverava da li postoji paran broj reči u rečenici.
function paranBrojReci($recenica)
{
    str_replace(' ', ' ', $recenica, $brojRazmaka);
    // echo $brojRazmaka;
    // echo str_word_count($recenica);
    if ($brojRazmaka + 1 % 2 == 0) {
        return "true";
    }
    return "false";
}

function paranBrojReci2($recenica)
{
    $niz = explode(" ", $recenica);
    if (count($niz) % 2 == 0) {
        return "true";
    }
    return "false";
}

function ukupanBrojRecenica($recenica)
{
    $j = 0;
    for ($i = 0; $i < strlen($recenica); $i++) {
        if ($recenica[$i] == '.' || $recenica[$i] == '!' || $recenica[$i] == '?')
            $j++;
    }
    return $j;
}

echo paranBrojKaraktera($recenicaZaVezbanje);
echo "<br>";
echo paranBrojReci($recenicaZaVezbanje);
echo "<br>";
echo paranBrojReci($recenicaZaVezbanje2);
echo "<br>";
echo paranBrojReci2($recenicaZaVezbanje);
echo "<br>";
echo ukupanBrojRecenica($tekst);
echo "<br>";

echo substr($tekst, 0, 100) . '...';




















echo "<br><br><br><br><br><br><br><br>";
$prom = [];
if ($prom)
    echo "TRUE";
else
    echo "FALSE";

/*
""         -> false
"0"        -> false
"0.0"      -> true
"1"        -> true
"01"       -> true
"abc"      -> true
"true"     -> true
"false"    -> true
"null"     -> true
0          -> false
0.1        -> true
1          -> true
1.1        -> true
-42        -> true
"NAN"      -> true
0          -> false
NAN        -> true
null       -> false
true       -> true
false      -> false
[]         -> false
[""]       -> true
["0"]      -> true
[0]        -> true
[null]     -> true
["a"]      -> true
{}         -> true
{}         -> true
{"t":"s"}  -> true
{"c":null} -> true
*/