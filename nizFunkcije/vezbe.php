<?php
$brojevi = [1, 2, 3, 4, 5];
unset($brojevi[2]);
print_r($brojevi);
$brojevi = array_values($brojevi);
print_r($brojevi);
// array_splice($brojevi,$insert_index,1); // isto radi remove, ali bez potrebe za normalizacijom indeksa

$brojevi[] = 6;
array_push($brojevi, 7);
echo "<br>";
print_r($brojevi);
$insert_broj = array(3, 3, 3);
$insert_index = 2;
// $pom_niz = [];
// for($i=0;$i<count($brojevi)+1;$i++){
//     if($i==$insert_index){
//         $pom_niz[$i] = $insert_broj;
//     }elseif($i>$insert_index){
//         $pom_niz[$i] = $brojevi[$i-1];
//     }else{
//         $pom_niz[$i] = $brojevi[$i];
//     }
// }
// $brojevi = $pom_niz;
// echo "<br>";
// print_r($brojevi);

array_splice($brojevi, $insert_index, 0, $insert_broj); //0 kao parametar, znaci da necemo da brisemo vec samo da odatle ubacimo elemente
echo "<br>";
print_r($brojevi);
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
            
            // napraviti funkciju koja ce da sluzi za mapiranje i krerianje niza brojeva (stringova) od 00-99
