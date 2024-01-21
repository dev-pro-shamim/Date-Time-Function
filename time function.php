<?php

echo "Hour is : " .date("h")."<br>";
echo "Hour is : " .date("H")."<br>";
echo "Hour is : " .date("g")."<br>";
echo "Hour is : " .date("G")."<br>";

// min

echo "Minute is : " .date("i")."<br>";
echo "Second  is : " .date("s")."<br>";
echo "Second  is : " .date("a")."<br>";
// echo "Second  is : " .date("A")."<br>";




echo "Full time   is : " .date("d-m-Y / h:i:sa")."<br>";


date_default_timezone_set('Asia/Dhaka');

echo " time   is : " .date("h:i:sa")."<br>";

?>