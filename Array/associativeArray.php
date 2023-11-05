<?php 

  // Associative array declaration
  
  // $age = array("ram" => "35", "shyam" => "40", "mohan" => "45");
  
  // or
  $age = [
    "ram" => "35", 
    "shyam" => "40",
    "mohan" => "45"
    ];

  echo "Ram's age is " . $age["ram"] . "<br>";
  $age["shyam"] = 38;
  echo "Shyam's age is " . $age["shyam"] . "<br>";

  echo "<pre>";
  print_r($age);
  echo "</pre>";


?>