<?php 
//phpinfo(); 
foreach($_SERVER as $key => $value){

    echo " $key = $value . <br/>";
}
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>