<?php
$var = 22.10;
var_dump(filter_var($var, FILTER_VALIDATE_INT));
if(filter_var($var, FILTER_VALIDATE_INT)){

echo "<br> $var is integer.";

}else {

  echo " <br> $var is not integer.";

}

 ?>
