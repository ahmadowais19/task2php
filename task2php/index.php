<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Q.1</h2>
 <?php
$color = ["red","green","whit",];
   echo "<h3>The memory of that scene for me is like a frame of film forever frozen at that moment: the (" . $color[0].") carpet, 
   the (" . $color[1]. ") lawn"," the (" . $color[2]. ")  house, the leaden sky. The new president and his first lady. - 
Richard M. Nixon</h3> ";
   ?>
   <hr>

   <h2>Q.2</h2>
   <?php
   $color = ["whit","green","red"];
   echo "<ul>";
foreach($color as $color){
echo "<li> $color </li>";
}
echo"</ul>";
echo "<hr>";
   ?>
   <h2>Q.3</h2>
   <?php
  $cities= array( "Italy"=>"Rome",
  "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels", 
 "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", 
  "France" => "Paris", 
 "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin", 
  "Greece" => "Athens", 
  "Ireland"=>"Dublin",
  "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", 
 "Spain"=>"Madrid"); 
 
 asort($cities);
 
 foreach ($cities as $country => $capital) {
     echo "The capital of $country is $capital"."<br>";
 }
   ?>
   <hr>
<h2>Q.4</h2>
<?php
$color = [4 => 'white', 6 => 'green', 11=> 'red'];
echo $color[4];
?>
<hr>
<h2>Q.5</h2>
<?php
$array = array(1, 2, 3, 4, 5);
// $location = 4;
$new_item = "@";
array_splice($array, 3, 0, $new_item);
foreach ($array as $item) {
    echo $item ;
};
?>
  <hr>
  <h2>Q.6</h2> 
  <?php
  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); 
  sort($fruits);
  foreach ($fruits as $fruit) {
     echo $fruit."<br>";
  };
  ?>
   
    
</body>
</html>