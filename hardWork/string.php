<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    //https://www.w3resource.com/php-exercises/php-string-exercises.php#editorr
    <br><br>
    <?php
    $recenica = 'ovo je recenica napisana malim slovima';
    echo strtoupper("$recenica");
    echo "<br>";
    echo strtolower("$recenica") . "<br>";
    echo "<br>";
    echo ucfirst("$recenica");
    echo "<br>";
    echo ucwords("$recenica");
    echo "<br>";

    //strlen() duzina stringa
    $recenica1 = 'Danas je divan prolecni dan u oktobru!';
    $karakteri = strlen($recenica1);
    echo "Ova recenica: " . $recenica1 . " ima " . $karakteri . " karaktera.";
    echo "<br>";

    //strpos() pozicija elementa u stringu
    $recenica2 = 'Beograd je najludji grad na celome svetu!';
    $pozicija = strpos($recenica2, "najludji");
    echo "Rec najludji u recenici: " . $recenica2 . " se nalazi na poziciji: " . $pozicija . ".";
    echo "<br>";
    $pozicija1 = strpos($recenica2, "ad", 15); //pocni pretragu od 15 mesta
    echo "Rec ad u recenici: " . $recenica2 . " se nalazi na poziciji: " . $pozicija1 . ".";
    echo "<br>";
    //moze i ovako krace
    echo "Pozicija reci na: " . strpos($recenica2, "na");
    echo "<br>";

    //str_replace()
    echo "<br><br>";
    $recenica3 = 'on i samo on.';
    $nakonIzmene = str_replace('on', 'oni', $recenica3, $brojZamena);
    echo "Nakon izmene: '$nakonIzmene' broj zamena: $brojZamena";
    echo "<br>";

    //substr()
    $recenica3 = "Trenutno psi bas uporno i glasno laju.";
    echo substr($recenica3, 5); //kreni od 5-te pozicije
    echo "<br>";
    echo substr($recenica3, -6); //5 karaktera od pozadi
    echo "<br>";
    echo substr($recenica3, 5, 15); //od 5 do 15-og karaktera
    echo "<br>";
    echo substr($recenica3, 5, -5); //od 5 do 5 od pozadi
    echo "<br><br>";

    //str_split()
    $tetka = 'ja sam tetka jednoj maloj tek rodjenoj Kseniji!';
    $niztetka = str_split($tetka);
    echo "<br/>Prikaz prvog niza<br/>";
    print_r($niztetka);
    echo "<br>";
    $niztetka = str_split($tetka, 10); //deli tako da svaki niz ima 8 karaktera
    echo "<br/>Prikaz drugog niza<br/>";
    print_r($niztetka);
    echo "<br><br>";


    //str_starts_with
    echo "<br><br>";
    $recenica6 = 'Imam divnog psa mesanca.';
    echo str_starts_with($recenica6, "Imam"); // vraca true i false
    echo "<br>";

    //str_ends_with
    echo str_ends_with($recenica6, "."); // vraca true i false
    echo "<br>";

    //explode()
    $recenica7 = 'Razdvoji recenicu na delove.';
    print_r(explode(" ", $recenica7));
    echo "<br><br>";


    //vezbanje
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
    echo paranBrojKaraktera($recenicaZaVezbanje);
    echo "<br>";

    //Kreirati funkciju koja proverava da li postoji paran broj reči u rečenici.


    // echo str_word_count($recenica);
    function paranBrojReci($recenica)
    {

        str_replace(" ", " ", $recenica, $brojRazmaka);
        echo $brojRazmaka;
        if ($brojRazmaka + 1 % 2 == 0) {
            return "true";
        }
        return "false";
    }
    echo paranBrojReci($recenicaZaVezbanje);
    echo "<br>";

    function paranBrojReci2($recenica)
    {
        $niz = explode(" ", $recenica);
        if (count($niz) % 2 == 0) {
            return "true";
        }
        return "false";
    }
    echo paranBrojReci2($recenicaZaVezbanje);
    echo "<br>";


    function ukupanBrojRecenica($recenica)
    {
        $j = 0;
        for ($i = 0; $i < strlen($recenica); $i++) {
            if ($recenica[$i] == "." || $recenica[$i] == "!" || $recenica[$i] == "?")
                $j++;
        }
        return $j;
    }
    echo ukupanBrojRecenica($tekst);
    echo substr($tekst, 0, 100) . '...'; //prvih 100 karaktera
    /* Write a PHP script to split the following string. 
Sample string : '082307'
Expected Output : 08:23:07*/
    $str1 = '082307';
    echo substr(chunk_split($str1, 2, ':'), 0, -1);

    // Write a PHP script to check whether a string contains a specific string? 
    // Sample string : 'The quick brown fox jumps over the lazy dog.'
    // Check whether the said string contains the string 'jumps'.
    $lazy = 'The quick brown fox jumps over the lazy dog.';
    if (strpos($lazy, "jumps") == true) {
        echo "rec jumps se nalazi na poziciji: " . strpos($lazy, "jumps");
    } else {
        echo "rec ne postoji";
    }

    //Write a PHP script to convert the value of a PHP variable to string.
    $a = 222;
    $b = (string)$a;
    if ($a = $b) {
        echo "jeste string";
    } else {
        echo "nije string";
    }


    ?>


</body>

</html>