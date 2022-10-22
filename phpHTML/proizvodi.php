<?php
include "podaci.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML i PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Prodavnica elektronike</h1>
    <h3>Narudzbenica</h3>
    <table>
        <thead>
            <th>Naziv</th>
            <th>Jedinicna cena</th>
            <th>Kolicina</th>
            <th>PDV</th>
            <th>Rabat</th>
            <th>Ukupan iznos</th>
        </thead>
        <tbody>
            <?php
            foreach ($proizvodi as $artikal) :
            ?>
                <tr>
                    <td>
                        <?php echo $artikal["naziv"] ?>
                    </td>
                    <td>
                        <?php echo $artikal["cena"] ?>
                    </td>
                    <td>
                        <?php echo $artikal["kolicina"] ?>
                    </td>
                    <td>
                        <?php echo vratiPDV($artikal["cena"]) ?>
                    </td>
                    <td>
                        <?php echo ispisiRabat($artikal["kolicina"]) ?>
                    </td>
                    <td>
                        <?php echo ukupnaCena($artikal["cena"], $artikal["kolicina"]) ?>
                    </td>

                    <!--za kolicinu ispod 40 rabat 2, iznad 40 i ispod 50 rabat 3,
                    iznad 50 rabat 5-->
                </tr>
            <?php
            endforeach;
            ?>

            <!--<tr>
                <td>Monitor</td>
                <td>350</td>
                <td>35</td>
            </tr>
            <tr>
                <td>Tastatura</td>
                <td>200</td>
                <td>47</td>
            </tr> -->
        </tbody>
        <tfoot>
            <td colspan="5">Ukupno:</td>
            <td><?php echo ukupno() ?></td>
        </tfoot>
    </table>
</body>

</html>