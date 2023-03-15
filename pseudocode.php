<?php

class pseudocode {

public function assesment(){   //DASS21

if(isset($_POST['submit'])){

$test1 = $_POST['test1'];
$test2 = $_POST['test2'];
$test3 = $_POST['test3'];
$test4 = $_POST['test4'];
$test5 = $_POST['test5'];
$test6 = $_POST['test6'];
$test7 = $_POST['test7'];
$test8 = $_POST['test8'];
$test9 = $_POST['test9'];
$test10 = $_POST['test10'];
$test11 = $_POST['test11'];
$test12 = $_POST['test12'];
$test13 = $_POST['test13'];
$test14 = $_POST['test14'];
$test15 = $_POST['test15'];
$test16 = $_POST['test16'];
$test17 = $_POST['test17'];
$test18 = $_POST['test18'];
$test19 = $_POST['test19'];
$test20 = $_POST['test20'];
$test21 = $_POST['test21'];


$and =  $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10
+ $test11 + $test12 + $test13 + $test14 + $test15 + $test16 + $test17 + $test18 + $test19 + $test20 + $test21;

$value = array($stress, $anxiety, $depression);
$therapeace = array($mentalhealth, $value);

if ($and == 'stress'){

if ($and == 0 ) {

$connection = $this->openConnection();
$stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
$stmt->execute([$normal]);

header("location:dass21.php?action=assesment4");

} else if ($and < 20  ) {

header("location:dass21.php?action=assesment");

} 

}

else if ($and == 'anxiety'){

if ($and == 0 ) {

$connection = $this->openConnection();
$stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
$stmt->execute([$normal]);

header("location:dass21.php?action=assesment4");

} else if ($and < 40 ){

header("location:dass21.php?action=assesment2");

}
}

else if ($and == 'depression') {

if ($and == 0 ) {

$connection = $this->openConnection();
$stmt = $connection->prepare("UPDATE patientinfo SET status= ?  ");
$stmt->execute([$normal]);

header("location:dass21.php?action=assesment4");

} else if ($and < 60 ) {

header("location:dass21.php?action=assesment5");

} 
}
}
}   

}
?>
