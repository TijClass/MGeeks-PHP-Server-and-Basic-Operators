<?php

// Using for loop
echo "- Using for loop:<br>";
for($i=0;$i<=60;$i++){
    if(($i%6) == 0 && $i>0){
        echo $i."  ";
    }
}
// Using while loop
echo "<br>- Using while loop:<br>";
$i = 0;
while($i<=60){
    if(($i%6) == 0 && $i>0){
        echo $i."  ";
    }
    $i++;
}