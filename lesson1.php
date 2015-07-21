<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21-Jul-15
 * Time: 15:29
 */

$test = "This is me.";

if (print($test)) {
    echo 'used print() as an expression because it returns a value';
}


var_dump(print('test'));