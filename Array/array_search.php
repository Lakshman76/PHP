<?php

  // array_search() function :- Search for an element in an array and return the index for indexed array and key for associative array of the element if found, false otherwise.

  $colors = array('red', 'green', 'blue', 'yellow');

  $index = array_search('blue', $colors);
  echo $index."<br>"; // 2

  echo array_search('black', $colors)."<br>"; // nothing (false)

  $age = array('ram' => '35', 'shyam' => '40', 'mohan' => '45');

  $name = array_search('40', $age);
  echo $name."<br>"; // shyam

  echo array_search('50', $age)."<br>"; // nothing (false)

?>