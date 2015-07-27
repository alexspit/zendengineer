<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25-Jul-15
 * Time: 03:21
 */

function isEven($x)
{
    return $x % 2;
}

function greet()
{

    if (func_num_args() > 0) { //check number of args supplied
        foreach (func_get_args() as $key => $arg) {
            $key++;
            if (is_array($arg)) {
                echo "<p> Parameter $key: \"" . print_r($arg) . "\" </p>";
            } else {
                echo "<p> Parameter $key: \"$arg\" </p>";
            }

        }
    } else {
        echo 'No parameters!';
    }
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
    <?php greet("Test", "LOL", "haha", 1, true, array(1, 2, 3, 4));

    $start = microtime(true);
    echo factorial(30);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<br>";
    echo "Time taken to execute: ", $time_elapsed_secs . " seconds";


    echo "<br>";
    $start = microtime(true);
    echo fibonacci(20);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<br>";
    echo "Time taken to execute: ", round($time_elapsed_secs, 4) . " seconds";
    ?>


</section>

<section id="exercise3">
    <h3>Exercise 3</h3>

    <p>Factorials with Recursive Function</p>
    <?php

    function factorial($a)
    {
        if ($a == 1) {
            return 1;
        }
        return $a * factorial($a - 1);
    }

    $start = microtime(true);
    echo factorial(30);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<br>";
    echo "Time taken to execute: ", $time_elapsed_secs . " seconds";
    ?>
</section>

<section id="exercise4">
    <h3>Exercise 4</h3>

    <p>Create a function which computes a specific Fibonacci number using
        recursive techniques</p>
    <?php
    function fibonacci($pos)
    {
        if ($pos == 0) {
            return 0;
        } else if ($pos == 1) {
            return 1;
        } else {
            return fibonacci($pos - 1) + fibonacci($pos - 2);
        }
    }

    $start = microtime(true);
    echo fibonacci(20);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<br>";
    echo "Time taken to execute: ", $time_elapsed_secs . " seconds";
    ?>
</section>

<section id="exercise5">
    <h3>Exercise 5</h3>

    <p>Create a program similar to the calculator in chapter 1, but which uses
        a different function for each operation. Functions should return a
        value and not echo the result from within the function
    </p>
    <?php

    function add($a, $b)
    {
        return $a + $b . PHP_EOL;
    }

    function subtract($a, $b, $order = true)
    {
        return ($order ? $a - $b : $b - $a) . PHP_EOL;
    }

    function multiply($a, $b)
    {
        return $a * $b . PHP_EOL;
    }

    function divide($a, $b, $order = true)
    {
        return ($order ? $a / $b : $b / $a) . PHP_EOL;
    }


    echo subtract(10, 5, false);
    echo add(10, 5);
    echo multiply(10, 5);
    echo divide(10, 5, false);

    ?>
</section>

<section id="exercise5">
    <h3>Exercise 6</h3>

    <p>Create a function which can accept any number of integer arguments
        and which returns their sum.
    </p>
    <?php

    function sum()
    {
        $sum = 0;
        if (func_num_args() > 0) { //check number of args supplied
            foreach (func_get_args() as $arg) {
                if (is_numeric($arg)) {
                    $sum += $arg;
                }
            }
        } else {
            return false;
        }

        return $sum > 0 ? $sum : false;
    }

    if ($x = sum(10, 5, 10, 0, 0.5, "lol")) {
        echo $x;
    } else {
        echo "No Valid Params";
    }

    ?>
</section>

<section id="exercise5">
    <h3>Exercise 7</h3>

    <p>2^10 = 1024 and the sum of its digits is 1 + 0 + 2 + 4 = 7
        Using recursive techniques, write a program which
        calculates the sum of the digits of the answer of 2^50.
    </p>
    <?php

    /*
     $num = (string)pow(2,30);
     $total = 0;
     $string = "";

    for($i=0; $i < strlen($num); $i++)
    {
        $string .= $num[$i];
        if($i < strlen($num)-1){
             $string .= " + ";
        }

        $total += $num[$i];
    }


     echo $string." = ".$total;

     $time_elapsed_secs = microtime(true) - $start;
     echo "<br>";
     echo "Time taken to execute: ", $time_elapsed_secs. " seconds";
     */

    /**
     * @param int $number This is documentation
     * @return int
     */
    function sumDigits($number)
    {
        if ($number == 0) {
            return 0;
        }
        return ($number % 10) + sumDigits($number / 10);
    }


    $start = microtime(true);
    echo sumDigits(pow(2, 125));


    $time_elapsed_secs = microtime(true) - $start;
    echo "<br>";
    echo "Time taken to execute: ", $time_elapsed_secs . " seconds";



    ?>
</section>

</body>
</html>