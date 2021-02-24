<?php

$ramadanTime = strtotime("Monday, April 13");
$now = time();
echo round(($ramadanTime-$now) / (60 * 60 * 24))." Days left till ramadan 2021";