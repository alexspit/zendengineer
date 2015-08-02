<?php
/**
 * Created by PhpStorm.
 * User: Alex
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
    <style>
        small{
            color: red;
        }
    </style>

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

<section id="exercise3">
    <h3>Exercise 3</h3>

    <p>Factorials with Recursive Function</p>
    <?php

    /**
     * Recursive function which takes an integer as parameter and returns the factorial of that number
     *
     * @param $a int
     * @return int
     */
    function factorialRecursive($a)
    {
        if ($a == 1) {
            return 1;
        }
        return $a * factorialRecursive($a-1);
    }
    $num = 99999;

    $start = microtime(true);
    echo "Recursive Factorial of $num: ". factorialRecursive($num);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<small> (Time taken to execute: ", $time_elapsed_secs . " seconds)</small> <br>";



    function factorialFor($a) {
        $f = 1; //initialise
        for ($i = 2; $i <= $a; $i++) {
            $f *= $i; //multiply last result by current number
        }
        return $f; //return answer to caller
    }


    $start = microtime(true);
    echo "Iterative Factorial of $num: ". factorialFor($num);
    $time_elapsed_secs = microtime(true) - $start;
    echo " <small>(Time taken to execute: ", $time_elapsed_secs . " seconds)</small>";

    ?>

</section>
<section id="exercise4">
    <h3>Exercise 4</h3>

    <p>Create a function which computes a specific Fibonacci number using
        recursive techniques</p>
    <?php
    /**
     * Recursive function which takes as parameter an integer and returns the value at the position of the fibonacci sequence.
     *
     * @param $pos int
     * @return int
     */
    function fibonacciRecursive($pos)
    {
        if ($pos == 0) {
            return 0;
        } else if ($pos == 1) {
            return 1;
        } else {
            return fibonacciRecursive($pos - 1) + fibonacciRecursive($pos - 2);
        }
    }

    function fibonacciIterative($n) {

        if($n <0)
            return -1;

        if ($n == 0)
            return 0;

        if($n == 1 || $n == 2)
            return 1;

        $int1 = 1;
        $int2 = 1;

        $fib = 0;

        for($i=1; $i<=$n-2; $i++ )
        {
            $fib = $int1 + $int2;
            $int2 = $int1;
            $int1 = $fib;
        }

        return $fib;

    }

    $pos = 30;

    $start = microtime(true);
    echo "Getting Fibonacci number Recursively at position $pos: ".fibonacciRecursive($pos);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<small> (Time taken to execute: ", $time_elapsed_secs . " seconds</small><br>";

    $start = microtime(true);
    echo "Getting Fibonacci number Iteratively at position $pos: ".fibonacciIterative($pos);
    $time_elapsed_secs = microtime(true) - $start;
    echo "<small> (Time taken to execute: ", $time_elapsed_secs . " seconds</small>";
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

<section id="exercise6">
    <h3>Exercise 6</h3>

    <p>Create a function which can accept any number of integer arguments and which returns their sum.</p>
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
        return $sum;
    }

    if ($x = sum(10, 5, 10, 0, 0.5, "lol")) {
        echo $x;
    } else {
        echo "No Valid Params";
    }

    ?>
</section>

<section id="exercise7">
    <h3>Exercise 7</h3>

    <p>2^10 = 1024 and the sum of its digits is 1 + 0 + 2 + 4 = 7. Using recursive techniques, write a program which calculates the sum of the digits of the answer of 2^50.</p>
    <?php
    /**
     * Recursive function which accepts 2 parameter, and returns the value of the first parameter to the power of the second.
     *
     * @param int $num1
     * @param int $num2
     * @return int
     */
    function power($num1, $num2){
        if($num2 == 0){
            return 1;
        }
        if($num2 == 1){
            return $num1;
        }
        // echo " return $num1 * power($num1, $num2-1)<br>"; //Debug Info
        return $num1 * power($num1, $num2-1);
    }

    /**
     * Recursive function which returns the sum of the digits of a given integer.
     *
     * @param int $number
     * @return int
     */
    function sumDigits($number)
    {
        if ($number == 0) {
            return 0;
        }
        //echo "return ($number % 10) + sumDigits($number / 10)<br>"; //debug info
        return ($number % 10) + sumDigits($number / 10);
    }

    $num = power(2, 3);

    //Checking how long it takes to execute
    $start = microtime(true);//getting the time before executing function in micro seconds
    echo sumDigits($num);//executing function
    $time_elapsed_secs = microtime(true) - $start;//getting the time after it the function is finished and subtracting it from the initial time
    echo "<small> (Time taken to execute: ", $time_elapsed_secs . " seconds</small>";//outputting the elapsed time in seconds


    ?>
</section>

</body>
</html>