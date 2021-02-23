<?php

for($i=0;$i<100;$i++){

    $randNbr= rand(1,2);
    if($randNbr==1){
        echo "Pile,je gagne! <br>";
    }
    elseif($randNbr==2){
        echo "Pile,vous gagnez! <br>";
    }
}

?>