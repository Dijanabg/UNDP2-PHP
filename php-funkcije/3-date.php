<?php
echo date("d"); //Dan
echo "<br>";
echo date("m"); //Mesec
echo "<br>";
echo date("Y"); //Godina
echo "<br>";
echo date("l"); //dan u nedelji

echo "<br><br>";
echo date("d.m.Y."); //dan u nedelji

echo "<br><br>";
echo date('h'); //sati
echo "<br>";
echo date('i'); //minuti
echo "<br>";
echo date('s'); //sekunde
echo "<br>";
echo date('a'); //AM ili PM
echo "<br>";
echo date('h:i:sa');
echo "<br>";
//Set Time Zone
//https://www.php.net/manual/en/timezones.europe.php
//date_default_timezone_set('Europe/London');
echo date('h:i:sa');

echo "<br><br>";
//kreiranje vremena
//mktime = make time
$timestamp = mktime(12, 0, 0, 10, 21, 1998);
echo $timestamp;
//timestamp je broj sekundi koji je prosao od 1.1.1970. do tog datuma
echo time(); //trenutni timestamp
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp);
echo "<br>";
echo "Izračunaj broj godina koristeći timestamp <br>";
echo (time() - $timestamp) / (60 * 60 * 24 * 365);
echo "<br><br>";

//pretvaranje string-a u time

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('today');
$timestamp4 = strtotime('tomorrow');
$timestamp5 = strtotime('next Sunday');
$timestamp6 = strtotime('+2 Months');
$timestamp7 = strtotime('+2 Days');
echo $timestamp2;
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp2);
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp3);
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp4);
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp5);
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp6);
echo "<br>";
echo date('d/m/Y h:i:sa', $timestamp7);
