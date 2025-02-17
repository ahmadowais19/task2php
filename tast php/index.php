<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
<?php
$color = "blue";


$name = "John";
var_dump($name); 

?>

<h1 style="color: <?php echo $color; ?>;">
This address is blue.</h1>
   
    
    <button class="<?php echo 'btn ' . $color; ?>">
        click me
    </button> -->



  <h3> Q1</h3>
    <?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year";
    } else {
        return "This year is not a leap year";
    }
}


$year = 2013;
echo isLeapYear($year);
?>

</br>

<h3> Q2</h3>
<?php
$temperature = 27;
if ($temperature < 20) {
    echo "It is cold today";
} elseif ($temperature < 20){
    echo "The weather is moderate";
} else {
    echo "It is summertime!";
}
?>

</br>

<h3> Q3</h3>
<?php
$firstNumber = 2;
$secondNumber = 2;

if ($firstNumber == $secondNumber) 
{
    $sum = ($firstNumber + $secondNumber) * 3;
} else {
    
    $sum = $firstNumber + $secondNumber;
}
echo "$sum";
?>

</br>

<h3> Q4</h3>

<?php
$firstInteger = 10;
$secondInteger = 10;
 $sum = $firstInteger + $secondInteger;
    if ($sum == 30) {
        echo "$sum";
    } else {
        echo"false";
    }
    ?>

</br>


<h3> Q5</h3>
<?php
$number = 20;
if ($number % 3 == 0) {
    echo "true";
    } else {
        echo "false";
    }
?>

</br>

<h3> Q6</h3>
<?php
$number = 50;
if ($number >=20 && $number <= 50) {
    echo "true";
    } else {
        echo "false";
    }
?>

</br>

<h3> Q7</h3>
<?php
$firstNumber = 1;
$secondNumber = 5;
$thirdNumber = 9;
if ($largestNumber = $firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    echo "The largest number is $firstNumber";
} elseif ($largestNumber = $secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    echo "The largest number is $secondNumber";
} else {
    echo "The largest number is $thirdNumber";
}
?>

</br>

<h3> Q8</h3>
<?php
$bill = 0 ;
if ($bill >=2.50){
    $bill = $unit * 2.50;
}echo "The bill is $bill";

?>

</br>

<h3> Q9</h3>
<?php
$color = ["red", "blue", "green", "yellow"];
echo $color[1];
// </br>
?>

<?php
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
echo $person["name"];
?>
</body>
</html>