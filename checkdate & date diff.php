<?php

// echo checkdate(2,29,2024);

$date1 = createdate("2013-10-15");
$date2 = createdate("2013-12-12");

$diff = date_diff($date1, $date2);


echo "<pre>";

print_r($diff);
echo "</pre>";


?>