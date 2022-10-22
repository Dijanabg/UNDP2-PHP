<!-- Write a PHP script to : -

a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase. -->

<?php
$string = "Ovo je string";
print (strtoupper($string)) . "<br>";
print (strtolower($string)) . "<br>";
print (ucfirst($string)) . "<br>";
print (ucwords($string)) . "<br>";
