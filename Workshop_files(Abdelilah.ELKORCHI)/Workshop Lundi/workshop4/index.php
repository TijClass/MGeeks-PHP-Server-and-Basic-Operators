
<?php

$name1 = 23;

$name2 =6;

echo 'checking $name1 : ';
var_dump(empty($name1));

echo '<br>';

echo 'checking $name2: ';
var_dump(empty($name2));

echo '<br>';

echo 'checking undeclared variable $name3: ';
var_dump(empty($name3));

?>