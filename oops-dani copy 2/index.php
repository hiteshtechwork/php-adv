<?php
include 'includes/person.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$person1 = new Person("Daniel", "Blue");
//    echo  $person1->name = "Daniel<br>";
//    echo  $person1->eyeColor = "Blue<br>";
//    echo $person1->age = "27<br>";

$person1->setName();
echo $person1->name . " is the Name<br>";
echo $person1->eyeColor . " is the EyeCOlor<br>";
echo $person1->age . " is the age<br>";
// $person1->setName() = "hon";
echo $person1->name . " is the Name<br>";

$person2 = new Person("Timmy", "Brown", 40);
echo "<br>Person 2 <br>";
// $person1->setName();
echo $person1->name . " is the Name<br>";
echo $person1->eyeColor . " is the EyeCOlor<br>";
echo $person1->age . " is the age<br>";
echo "<br><br>";
echo "<br> <br>";
$person3 = new Person("hitesh", "kumar", 26);
echo $person3->getName();
echo "<br> <br>";

// deleteing an object completely
$person4 = new Person("hitesh1", "kumar", 26);
unset($person4);        // the object i.e person4 is now being deleted and the next line of code will show an error message. for undefined variable $person4.
echo $person4->getName();

?>
</body>
</html>