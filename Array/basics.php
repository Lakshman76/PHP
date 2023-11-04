<?php
  
  // Array Declaration
  // $colors = array("red", 15, "blue", 9.86);
  $colors = ["red", 15, "blue", 9.86];

  echo "<pre>";
  print_r($colors);
  echo "</pre>";

  // Accessing Array Elements
  echo "<ul>";
  for($i = 0; $i < 4; $i++){
    echo "<li> $colors[$i] </li>";
  }
  echo "</ul>";
  
?>