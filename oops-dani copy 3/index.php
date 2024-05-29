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

    echo Person::$drinkingAge;
    Person::setDrinkingAge(18);
    echo "<br>";
    echo Person::$drinkingAge;

    // $person1 = new Person("hitesh","verma");
    // echo "<br>";
    // echo $person1->drinkingAge;  // trying to access the drinkingAge static property via the non-static method will through an error.

    $person1 = new Person("hitesh","verma");
    echo "<br>";
    echo $person1->getDA();
    ?>
</body>
</html>