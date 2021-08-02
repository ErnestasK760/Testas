<?php
echo "<h1>Pirma užduotis: </h1>";

$array = [];
for($i = 0; $i < 101;$i++ ){
    if($i % 10 == 0){
        $array[$i] = "A";
    }else{
        $array[$i]= "B";   
    }
}
print_r($array);








echo "<h1>Antra užduotis: </h1>";
$smallarr = [];
$array2 = $array;
for($i = 0; $i < 101; $i++){
    $array2[$i] = $smallarr;
    for($j = 0; $j < rand(3,10); $j++){
       if($array[$i] == "A"){
        $array2[$i][$j] = "A";
       } 
       if($array[$i] == "B"){
        $array2[$i][$j] = "B"; 
       }
    }
}
print_r($array2);

echo "<br><br>";
echo "<h1>Trečia užduotis: </h1>";
ini_set('memory_limit', '-1');

for($i = 0; $i < 101; $i++){
    $count = count($array2[$i]);
    for($j = 0; $j < 10-$count; $j++){
        if($count >= 10){
        }else{
            $array2[$i][] = "C";
        }
    }
}
print_r($array2);
$counta = 0;
$countb = 0;
$countc = 0;
for($i = 0; $i < 101; $i++){
    for($j = 0; $j < count($array2[$i]); $j++){
        $counta++;
        $countb++;
        $countc++;
    }
}

?>