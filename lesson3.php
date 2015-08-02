<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 30-Jul-15
 * Time: 20:08
 */

function dump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

$array = array(1,2,3,4);

list($var1, $var2, $var3) = $array;

echo $var3;
echo $array[3];

echo implode('',$array);

dump(in_array("2.4", $array));

dump(array_key_exists("2",$array));

dump($array);
unset($array);
dump($array);

