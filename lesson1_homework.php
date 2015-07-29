<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25-Jul-15
 * Time: 02:27
 */
$num1 = "";
$num2 = "";
$addition;
$subtraction;
$multiplication;
$division;
$modulus;

//Create a program which shows the addition, subtraction, multiplication and division (with modulus) of two numbers.
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;
    $modulus = $num1 % $num2;
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Chapter 1</h1>
<section id="exercise1">
    <h3>Exercise 1</h3>

    <p>Create a program which shows the addition, subtraction, multiplication and division (with modulus) of two
        numbers. </p>

    <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="num1">First Number</label>
        <input id="num1" name="num1" type="number" value="<?php echo $num1; ?>"/>
        <label for="num2">Second Number</label>
        <input id="num2" name="num2" type="number" value="<?php echo $num2; ?>"/>

        <input type="submit" value="Calculate"/>

    </form>

    <?php

    if ($_POST) {
        echo "<p> $num1 + $num2 = $addition </p>";
        echo "<p> $num1 - $num2 = $subtraction </p>";
        echo "<p> $num1 * $num2 = $multiplication </p>";
        echo "<p> $num1 / $num2 = $division </p>";
        echo "<p> $num1 % $num2 = $modulus </p>";

    }
    ?>
</section>

<section id="exercise2">
    <h3>Exercise 2</h3>

    <p>Create a program which generates an initial random integer. Using a
        form of iteration, add 10, 20, 30, …,300 to the number, showing the
        current value at every iteration. If the ending number is greater
        than 9000, show on screen “over 9000!”, otherwise show
        "less than 9000". </p>

    <?php
    $int = rand(1, 9999);//Creating a random number from 1-9999
    $i = 0;//Initializing a variable to act as counter

    do {//start looping
        $i += 10;//Incrementing counter by 10
        $tmp = "$int + $i : ";//Storing template string for addition

        $int += $i;//Adding the counter to the random number

        if ($int <= 9000) {//if less than or equal to 9000
            echo $tmp . $int;//print the addition string
            echo($i >= 300 ? " (Less than 9000)" : "");//if counter is greater or equal to 300 (last iteration) print "Less than 9000" else print an empty string
            echo "<br>";
        } else {//else if random number is greater than 9000
            echo $tmp . " (Over 9000!)";//print "Over 9000"
            break;//Exit the iteration
        }
    } while ($i < 300);//loop untill counter is less than 300

    ?>
</section>


</body>
</html>