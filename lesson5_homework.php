<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20-Aug-15
 * Time: 18:48
 */

$clean = array();
$clean['salary'] = 0;
$net_salary = "";
define("FLAT_RATE", 0.20);
define("TAX_CAP", 7000);
define("NI_PER_YEAR", 10*52);

if($_POST){

    if(is_numeric($_POST['salary'])){
        $clean['salary'] = $_POST['salary'];
        if($clean['salary'] > 520){

            if($clean['salary'] <= TAX_CAP){
                $yearly_tax = 0;
                $net_salary = $clean['salary'] - NI_PER_YEAR;
            }
            else{
                $yearly_tax = ($clean['salary'] - TAX_CAP)*FLAT_RATE;
                $net_salary = (TAX_CAP + (($clean['salary'] - TAX_CAP)*(1-FLAT_RATE))-NI_PER_YEAR);
            }

            $yearly_ni = NI_PER_YEAR;
        }
        else{
            $yearly_ni = 0;
            $yearly_tax = 0;
            $net_salary = $clean['salary'];
        }


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
<h1>Chapter 5 - Web Programming</h1>
<section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="salary">Enter Gross Salary:</label>
        <input type="text" name="salary" id="salary" value="<?php echo $clean['salary'];?>" required />

        <input type="submit" value="Submit"/>
    </form>
    <?php
    if($net_salary != ""){
        echo "<p>NI: $yearly_ni</p>";
        echo "<p>Taxes: $yearly_tax</p>";
        echo "<p>Net Salary: <b>$net_salary</b></p>";
    }

    ?>

</section>


</body>
</html>