<?php

$date = date_create("2024-01-01 00:00:00", timezone_open('Asia/Dhaka'));
echo date_format($date , "d/m/Y H:i:sa,l");

?>