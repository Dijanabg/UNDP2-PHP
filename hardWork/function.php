<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //funkcija za sabiranje dva broja

    function sabir($a, $b)
    {
        return $a + $b;
    }

    echo sabir(2, 6);
    echo "<br>";

    //funkcija ispisi sve brojeve
    function ispisiSveBr(...$brbroj)
    {
        foreach ($brbroj as $element) {
            echo $element . ",";
        }
    }
    ispisiSveBr(1, 2, 3, 4, 5, 10);
    //funkcija saberi sve brojeve
    function saberiSveBrojeve(...$rest)
    {
        $ukupno = 0;
        foreach ($rest as $item) {
            $ukupno += $item;
        }
        echo $ukupno;
    }
    echo "<br>";
    saberiSveBrojeve(1, 2, 3, 4, 5, 10);
    echo "<br>";

    /*Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.*/
    function faktorijel($num)
    {
        $faktorijal = 1;
        for ($i = 1; $i <= $num; $i++) {
            $faktorijal *= $i;
        }
        return $faktorijal;
    }
    echo faktorijel(4);


    ?>
</body>

</html>