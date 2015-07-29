<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25-Jul-15
 * Time: 03:21
 */
function myVar_dump($var)
{
    echo sprintf('<pre>%s</pre>', print_r($var, true));
}


function isEven($x)
{
    return $x % 2;
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Lesson 2</h1>
<section id="exercise1">
    <h3>Exercise 1</h3>

    <p>Create a function, called isEven, which returns the value TRUE if the number supplied is even, or FALSE if it is
        odd.</p>
    <?php

    for ($i = 0; $i < 10; $i++) {
        $x = rand(1, 999);
        if (isEven($x)) {
            echo $x . " = Odd" . PHP_EOL . "<br>";
        } else {
            echo $x . " = Even" . PHP_EOL . "<br>";
        }
    }

    ?>

    <?php




    ?>
</section>

<section id="exercise2">
    <h3>Exercise 2</h3>

    <p>Create a function, which will print every parameter supplied on a
        line by itself, using appropriate HTML formatting tags. Function
        output should be similar to the following</p>



    <?php

    function printArgs()
    {

        if (func_num_args() > 0) { // check number of args supplied
            foreach (func_get_args() as $key => $arg) { // loop through an array of args
                $key++;// increment the key to start from 1
                if (is_array($arg)) { // handling arrays
                    echo "<p> Parameter $key: <b><i>\"" . print_r($arg) . "\"</i></b></p>";
                }
                else { // normal parameter
                    echo "<p> Parameter $key: <b><i>\"$arg\"</i></b></p>";
                }
            }
        } else {
            echo 'No parameters!';
        }
    }

    printArgs("Test", "LOL", "haha", 1, true, "ssss");

    ?>
</section>


</body>
</html>