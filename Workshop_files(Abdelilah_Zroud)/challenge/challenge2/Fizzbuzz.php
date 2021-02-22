<?php

for ($x = 0; $x <= 100; $x++) {
   
    //  echo "<br/>The number is: $x "; 
    if ($x%3 == 0 && $x%5 == 0) {
        echo "fizzbuzz <br/>";
    }
    elseif ($x%3 == 0)
    {
        echo "frizz <br/>";
    }
    elseif ($x%5 == 0)
    {
        echo "buzz <br/>";
    }
    else {
        
        echo $x."<br>";
    }


}
?>