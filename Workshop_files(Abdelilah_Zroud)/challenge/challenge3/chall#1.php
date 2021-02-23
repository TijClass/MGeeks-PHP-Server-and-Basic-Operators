<?php
$me = 0;
$you = 0;
for ($i=0; $i < 100; $i++) { 
    $randNum = rand(1,2);
    if($randNum == 1){
        $me++;
    }elseif($randNum == 2){
        $you++;
    }else {
        echo "error!";
    }
}
echo $me.": Pile, je gagne !<br/>";
echo $you.": Pile, vous gagnez<br/>";