<?php
require "header.php";
?>

<?php
include_once "personClass.php";
include_once "studentClass.php";

$person1 = new PersonClass();
$person1->FirstName = "Matt";
$person1->LastName = "Dark";

echo "<br /> Person age is: " . $person1->HaveBirthday() . "<br /> <br />";
var_dump($person1);

$student = new StudentClass();
$student->FirstName = "Davey";
$student->LastName = "Jones";
$student->GPA = 3.52;
echo "<br /> <br />";
var_dump($student);
?>

<?php
    include_once"footer.php"    
?>