<?php
$var = NULL;

function  test(){}
echo is_callable('test')."<br>";
var_dump(is_callable($var));
if(is_callable($var)){

    echo "<br> $var is numeric.";


}else{

    echo "<br> $var is not numeric.";

}

 ?>
