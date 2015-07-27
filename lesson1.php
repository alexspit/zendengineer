<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21-Jul-15
 * Time: 15:29
 */
//header("content-type: video/mp4");
//readfile("181242_08_01_XR15_goodbye.mp4");


$f = file('list.csv');

//var_dump($f);

$x = 20 << 5;

echo pow(2, 20) . PHP_EOL;


echo $x;

$x = 10;

function ifTrue()
{
    echo "True";
}

function ifFalse()
{
    echo "False";
}

$x == 10 ? ifTrue() : ifFalse();


function test($x = int)
{
    echo 10 + $x;
}

test(10);
/*$test = "This is me.";

if (print($test)) {
    echo 'used print() as an expression because it returns a value';
}

include_once "bootstrap.html";
var_dump(print('test'));


$f = fopen("list.csv", 'a+');

while($row = fgetcsv($f)){

    echo "<p>$row[0] $row[1] $row[2] has a salary of $$row[3]</p>".PHP_EOL;

}

$val = array("Miss", "Sonia", "Carabott", 20000);

fputcsv($f,$val);
fclose($f);*/