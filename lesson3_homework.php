<p> Using arrays, create a data structure which can store a list of students (ID, name, surname) together with the personal details (address & tel. no.) of
    each individual student, including an average mark based on a preassessment test.
</p>
<p> Create a function which shows a list of students showing ID, Name, Surname & average mark. Default sorting by Surname (asc), but should allow for
    sorting by ID (asc) and average mark (desc).
</p>
<p> Create a function which can display all the information belonging to a particular student.
</p>
<p> Create a function which resets the average mark for all students to 0.
</p>
<?php
function dump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

$students = array(
                array(
                    "id"        =>   "STUD_123",
                    "name"      =>   "Alex",
                    "surname"   =>   "Spiteri",
                    "address"   =>   "194, Autumn Leaves, Triq il-Kampanella, Fgura, Malta",
                    "number"    =>   "0035679281426",
                    "mark"      =>   80
                ),
                array(
                    "id"        =>   "STUD_789",
                    "name"      =>   "John",
                    "surname"   =>   "Cena",
                    "address"   =>   "123, London Bulevard, California, USA",
                    "number"    =>   "684423234434",
                    "mark"      =>   50
                ),
                array(
                    "id"        =>   "STUD_456",
                    "name"      =>   "Jerry",
                    "surname"   =>   "Cheng",
                    "address"   =>   "1223, Flat1 BlockB, China City, China",
                    "number"    =>   "34434343434",
                    "mark"      =>   100
                )
            );

function getStudents($orderBy = "surname"){
    global $students;
    $order = strtolower($orderBy);
    switch ($order){
        case "surname":
            usort($students, function($a, $b) {
                return strcasecmp($a['surname'], $b['surname']);
            });
            break;
        case "id":
            usort($students, function($a, $b) {
                return strnatcasecmp($a['id'], $b['id']);
            });
            break;
        case "mark":
            usort($students, function($a, $b) {
                return $b['mark'] - $a['mark'];
            });
            break;
        default:
            throw new Exception("Invalid orderby parameter supplied");
            break;
    }


    foreach($students as $student){
        echo "<p>".$student['id'].": ".$student['name']." ".$student['surname']." Mark: ".$student['mark']."</p>";
    }
}

function getStudent($id){
    global $students;

    foreach($students as $student){

        if(in_array($id, $student)){
            return "<p>ID: ".$student['id']."</p><p>Name: ".$student['name']." ".$student['surname']."</p><p>Address: ".$student['address']."</p><p>Number: ".$student['number']."</p><p> Mark: ".$student['mark']."</p>";
        }

    }
    return "Student with ID: $id not found.";
}

function resetMarks(){
    global $students;

    foreach($students as &$student){
        $student['mark'] = 0;
    }
}


getStudents();

$student = getStudent("STUD_123");
dump($student);

resetMarks();
dump($students);

?>

<p> Create an array containing 20 numbers. Using loops, display the
    maximum, minimum, average and sum of the numbers.</p>
<p> Create an associative array having ID Card as key and Name as
    value. Then iterate through the array and display values.</p>
<?php
$numbers = array();

function minNum($array){

    $count = count($array);
    if($count == 0){
        throw new Exception("Array is empty");
    }
    else if($count == 1){
        return $array[0];
    }
    else{
        $min = $array[0];
        foreach($array as $number){

            if($number <= $min){
                $min = $number;
            }
        }

        return $min;
    }

}

function maxNum($array){

    $count = count($array);
    if($count == 0){
        throw new Exception("Array is empty");
    }
    else if($count == 1){
        return $array[0];
    }
    else{
        $min = $array[0];
        foreach($array as $number){

            if($number >= $min){
                $min = $number;
            }
        }

        return $min;
    }

}

function sumNum($array){
    $sum = 0;
    foreach($array as $a){
        if(is_numeric($a)){
            $sum += $a;
        }
    }
    return $sum;
}

function avgNum($array){
    return sumNum($array)/count($array);
}

for($i = 0; $i < 20; $i++){
    $numbers[] = rand(1,10000);
}

dump($numbers);

echo "Min: ".minNum($numbers)."<br>";
echo "Max: ".maxNum($numbers)."<br>";
echo "Sum: ".sumNum($numbers)."<br>";
echo "Average: ".avgNum($numbers)."<br>";

$assoc = array("584291M" => "Alex Spiteri", "323423M" => "John Doe", "2323342G" => "Wenzu Mallia");
dump($assoc);
foreach($assoc as $key => $value){
    echo "<p>$key: $value</p>";
}


$nums = array();
for($i = 0; $i < 10; $i++){
    $nums[] = rand(1,10000);
}
dump($nums);
rsort($nums);
dump($nums);

$count = count($nums);
$nums2 = array();
for($i=0;$i<$count;$i++){
    $nums2[] = array_pop($nums);
}
$nums2;
dump($nums2);

function fibonacci($pos) {
    static $cache; //declaring $cache as static to persist it throughout all the calls.

    if ($pos == 0) {
        return 0;
    } else if ($pos == 1 || $pos == 2) {
        return 1;
    } else {
        if (!(!is_null($cache) && array_key_exists($pos, $cache))) { //is $cache is not null and the current position is not already cached
            $cache[$pos] = fibonacci($pos - 1) + fibonacci($pos - 2);
        }
        return $cache[$pos];
    }
}

