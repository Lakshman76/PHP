<?php 
  
  // for Indexed array

  $colors = ["red", "green", "blue", "black"];

  foreach($colors as $color){
    echo $color."<br>";
  }

  // for Associative array

  $age = [
  "ram" => "35", 
  "shyam" => "40",
  "mohan" => "45"
  ];

  foreach($age as $value){
    echo $value."<br>";
  }

  foreach($age as $key => $value){
    echo "$key : $value<br>";
  }

?>