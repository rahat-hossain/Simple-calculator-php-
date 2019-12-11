<?php

$addition = $_POST['num1'] + $_POST['num2'];
$substraction = $_POST['num1'] - $_POST['num2'];
$multiply = $_POST['num1'] * $_POST['num2'];
$division = $_POST['num1'] / $_POST['num2'];

if(isset($_POST['add'])){
    echo "First number is : " . $_POST['num1'] . "<br>";
    echo "Second number is : " . $_POST['num2'] . "<br> <br>";
    echo "Addition = " . $addition ;
}
elseif(isset($_POST['sub'])){
    echo "First number is : " . $_POST['num1'] . "<br>";
    echo "Second number is : " . $_POST['num2'] . "<br> <br>";
    echo "substraction = " . $substraction ;
}
elseif(isset($_POST['mul'])){
    echo "First number is : " . $_POST['num1'] . "<br>";
    echo "Second number is : " . $_POST['num2'] . "<br> <br>";
    echo "Multiplication = " . $multiply ;
}
elseif(isset($_POST['div'])){
    echo "First number is : " . $_POST['num1'] . "<br>";
    echo "Second number is : " . $_POST['num2'] . "<br> <br>";
    echo "Division = " . $division ;
}

?>