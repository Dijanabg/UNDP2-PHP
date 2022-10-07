<?php
    echo "Ovo je neki tekst.";
    echo "<h1>Ovo bi trebalo da bude naslov</h1>";
    echo '<h1>Ovo bi trebalo da bude naslov</h1>';

    /**********
     * *****
     * PROMENLJIVE
     * *******
    **** */
    $ime = "Jovan"; ///string odnosno niZ karaktera
    echo $ime;
    echo "<br>";

    //phpinfo(); //verzija php
    $prosek = 9.1;
    var_dump($prosek);
    ////die(); // ne izvrsava dalje kod.
    echo "<br>";
    $godina = 2022;
    echo $godina;

    echo "<br>";
    $predavac = true;
    echo $predavac; // 1 ispisuje ako je tacno

    
    /******
     * KONSTANTE
     * *******
     * ***/
    echo "<br>";
    //DEFINE("NAZIV", "vrednost");
    define("NOVA_KONSTANTA", "Ovo je nova konstanta");
    echo NOVA_KONSTANTA;


    echo " Ime: ".$ime."<br>"; ///lepljenje stringova
    echo " Godina: ".$godina;

    echo "<br>";
    echo is_int($ime);
    echo is_int($godina); //ispisuje 1 za true

    echo is_float($prosek);
    //is_string(); is_bool();
    //defined(); provera da li postoji varijabla
    echo defined($ime);
    //echo defined($vrednost);
    
    $broj1 = 123;

    function test(){
        global $broj1;
        $broj2 = 234;
        $broj1= $broj1 + $broj2;
    }
    test();

    echo ("<br>");
    echo $broj1;
    //echo $broj2; ovo ne moze jer je lokalna u funkciji

    echo ("<br>");
    /******
     * *****
     * ****ARITMETICKI OPERATORI
     * *******
     */

    $prviBroj = 12;
    $drugiBroj = 6;

    $suma = $prviBroj + $drugiBroj;
    echo $suma."<br>";
    echo($prviBroj - $drugiBroj). "<br>";
    echo ($prviBroj * 3). "<br>";
    echo(33/3)."<br>";
    echo(65%7)."<br>"; //ostatak pri deljenju
    echo(5**3)."<br>";//stepenovanje 5na 3

    ///inkrementiranje, dekrementiranje, operatori dodeljivanja
    $promenljiva = 7;
    $promenljiva +=1;
    echo(++$promenljiva)."<br>";
    echo($promenljiva++)."<br>";

    $a = 13;

    $a += 3;

    echo $a."<br>";

    $nekiString = "Ana";
    //$nekistring = $nekiString . "Anic";
    $nekiString .= "Anic";
    echo $nekiString."<br>";


    echo(7 == '7')."<br>";
    echo(7 === '7')."<br>";
    echo(7 === 7.0)."<br>";

    // if(!(7==7)){}
echo !(8>8)."<br>";  ///negacija

    $niz =["jelena", "dusan", "ivana", 7];
    echo $niz[1]."<br>";
    $nizkljuc = ["ime"=>"jelena", "prezime" =>"saric"];
    echo $nizkljuc["ime"]."<br>";


?>