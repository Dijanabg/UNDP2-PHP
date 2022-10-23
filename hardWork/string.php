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
    $niztetka = str_split($tetka, 10); //deli tako da svaki niz ima 10 karaktera
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
    echo "<br>";
    $str1 = '082307';
    echo substr(chunk_split($str1, 2, ':'), 0, -1);
    echo "<br>";

    // Write a PHP script to check whether a string contains a specific string? 
    // Sample string : 'The quick brown fox jumps over the lazy dog.'
    // Check whether the said string contains the string 'jumps'.
    $lazy = 'The quick brown fox jumps over the lazy dog.';
    if (strpos($lazy, "jumps") == true) {
        echo "rec jumps se nalazi na poziciji: " . strpos($lazy, "jumps");
    } else {
        echo "rec ne postoji";
    }
    echo "<br>";
    //Write a PHP script to convert the value of a PHP variable to string.
    $a = 222;
    $b = (string)$a;
    if ($a = $b) {
        echo "jeste string";
    } else {
        echo "nije string";
    }
    echo "<br>";
    //Write a PHP script to extract the file name from the following string.
    //Sample String : 'www.example.com/public_html/index.php'
    //Expected Output : 'index.php' 

    $url = 'www.example.com/public+html/index.php';
    $imefajla = substr(strrchr("$url", "/"), 1);
    echo $imefajla;
    echo "<br>";

    /* Write a PHP script to extract the user name from the following email ID. 
Sample String : 'rayy@example.com'
Expected Output : 'rayy' */

    $emailstr = 'rayy@example.com';
    $user = strstr($emailstr, "@", true);
    echo ($user);
    echo "<br>";
    /*Write a PHP script to get the last three characters of a string. 
Sample String : 'rayy@example.com'
Expected Output : 'com' */
    echo substr($emailstr, -3);
    echo "<br>";

    /*Write a PHP script to format values in currency style. Go to the editor
Sample values : value1 = 65.45, value2 = 104.35
Expected Result : 169.80*/
    $value1 = 65.45;
    $value2 = 104.35;
    echo sprintf("%1.2f", $value1 + $value2);
    echo "<br>";

    /*Write a PHP script to generate simple random password [do not use rand() function] from a given string. Go to the editor
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Note : Password length may be 6, 7, 8 etc.*/
    function generatePasword($brkaraktera)
    {
        $randstring = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        if ($brkaraktera >= 6) {
            return substr(str_shuffle($randstring), 0, $brkaraktera);
        } else {
            echo "pasword mora imati minimum 6 karaktera";
        }
    }
    echo (generatePasword(6));
    echo "<br>";
    /*Write a PHP script to replace the first 'the' of the following string with 'That'. 
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog.*/
    $zamena = 'the quick brown fox jumps over the lazy dog.';
    $zamenjeno = str_replace("the", "The", $zamena);
    echo $zamenjeno;
    echo "<br>";
    /*Write a PHP script to find the first character that is different between two strings. 
String1 : 'football'
String2 : 'footboll'
Expected Result : First difference between two strings at position 5: "a" vs "o"*/
    $str1 = 'football';
    $str2 = 'footboll';
    $str_pos = strspn($str1 ^ $str2, "\0");
    printf('First difference between two strings at position %d: "%s" vs "%s"', $str_pos, $str1[$str_pos], $str2[$str_pos]);
    echo "<br>";
    /*Write a PHP script to put a string in an array. 
Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." } */
    $str3 = "Twinkle, twinkle, little star,<br> How I wonder what you are.<br>Up above the world so high,<br>Like a diamond in the sky.";
    //echo $str3;
    $nizstr = explode("<br>", $str3);
    var_dump($nizstr);
    echo "<br>";

    /*Write a PHP script to get the filename component of the following path. 
Sample path : "https://www.w3resource.com/index.php"
Expected Output : 'index'*/
    $url1 = 'www.example.com/public_html/index.php';
    $imeFajla = basename($url1, ".php");
    echo $imeFajla;
    echo "<br>";

    /*Write a PHP script to print the next character of a specific character. 
Sample character : 'a'
Expected Output : 'b'
Sample character : 'z'
Expected Output : 'a' */

    $cha = 'z';
    $next_cha = ++$cha;
    if (strlen($next_cha) > 1) {
        $next_cha = $next_cha[0];
    }
    echo $next_cha;
    echo "<br>";
    /*Write a PHP script to remove a part of a string from the beginning. 
Sample string : 'rayy@example.com'
Expected Output : 'example.com'*/
    $email = 'rayy@example.com';
    $imeMail = 'rayy@';
    if (substr($email, 0, strlen($imeMail)) == $imeMail) {
        $email = substr($email, strlen($imeMail));
    }
    echo $email;
    echo "<br>";

    /*Write a PHP script to insert a string at the specified position in a given string.
Original String : 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output : 'The quick brown fox'*/
    $fox = 'The brown fox';
    $rec = 'quick';
    $pozicija = 4;
    // $fox = str_replace(strstr("$fox", " ", true), " quick ", "$fox");
    $foxnew = substr_replace($fox, $rec . " ", $pozicija, 0);
    echo $foxnew;
    echo "<br>";

    /*Write a PHP script to get the first word of a sentence.
    Original String : 'The quick brown fox'
    Expected Output : 'The'*/
    $arr1 = explode(' ', $fox);
    echo $arr1[0];
    echo "<br>";

    /*Write a PHP script to remove all leading zeroes from a string. 
Original String : '000547023.24'
Expected Output : '547023.24'*/
    $nizbr = '000547023.24';
    $str1 = ltrim($nizbr, '0');
    echo $str1;
    echo "<br>";

    /*Write a PHP script to remove part of a string. Go to the editor
Original String : 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output : 'The quick brown jumps over the lazy dog'*/
    $string1 = 'The quick brown fox jumps over the lazy dog';
    echo str_replace("fox", "", $string1);
    echo "<br>";


    ?>

</body>

</html>