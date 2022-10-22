<!-- Write a PHP script to check whether a string contains a specific string?

Sample string : 'The quick brown fox jumps over the lazy dog.'
Check whether the said string contains the string 'jumps'. -->
<?php
$string = 'The quick brown fox jumps over the lazy dog.';
if (strpos($string, 'jumps') !== false) {
    echo 'The specific word is present.';
} else {
    echo 'The specific word is not present.';
}
echo "<br/>";

/* duzina stringa strlen() */

$recenica = 'Fakultet organizuje zurku u prostorijama citaonice.';
// $brojSlova = strlen($recenica);
// echo "Recenica: '$recenica' ima: $brojSlova karakter";
echo "Recenica: " . $recenica . "ima: " . strlen($recenica) . "karaktera";
/* vraca index karaktera ili niza karaktera	strpos() */

$recenica = 'Fakultet organizuje zurku na fakultetu.';
// Indeks reci 'zurka'
echo 'Pozicija: ' . strpos($recenica, 'zurku');
echo "<br/>";
// Pocni pretragu od 25og indeksa
echo 'Pozicija: ' . strpos($recenica, 'tet', 25);
echo "<br/>";
// Nije pronadjeno
echo 'Pozicija: ' . strpos($recenica, 'Univerzitet');
echo "<br/>";
?>

<!-- str_replace() -->
<?php
$recenica = 'on i samo on.';
$nakonIzmene = str_replace('on', 'oni', $recenica, $brojZamena);
echo "Nakon izmene: '$nakonIzmene' broj zamena: $brojZamena";
echo '<br/>';
?>

<!-- substr() -->
<?php
$recenica = 'Testiranje funkcije substr() u php-u.';
echo substr($recenica, 4);
echo '<br/>';
echo substr($recenica, -4);
echo '<br/>';
echo substr($recenica, 4, 15);
echo '<br/>';
echo substr($recenica, 4, -5);
?>

<!-- str_split() -->
<?php
$recenica = 'Testiranje funkcije str_split() u php-u.';
$nizKaraktera = str_split($recenica);
echo "<br/>Prikaz prvog niza<br/>";
print_r($nizKaraktera);
$nizKaraktera = str_split($recenica, 8);
echo "<br/>Prikaz drugog niza<br/>";
print_r($nizKaraktera);
echo '<br/>';
?>