<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23-Jul-15
 * Time: 19:04
 */

/** @var array $num_list */
$num_list = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten");

for ($i = 0; $i < 10; $i++) {
    /**
     * @var int $num random number from 1-10
     * */
    $num = rand(1, 10);
    echo $num . "=" . strtoupper($num_list[$num]) . PHP_EOL . "<br>";
}


function isEven($x)
{
    return $x % 2;
}

for ($i = 0; $i < 10; $i++) {
    $x = rand(1, 999);
    if (isEven($x)) {
        echo $x . " = Even" . PHP_EOL . "<br>";
    } else {
        echo $x . " = Odd" . PHP_EOL . "<br>";
    }
}
