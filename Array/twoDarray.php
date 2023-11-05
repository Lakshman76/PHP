<?php

  $employees = [
    [1, "John", 25, "Manager"],
    [2, "Jane", 30, "Developer"],
    [3, "Steve", 35, "Designer"],
    [4, "Sarah", 28, "Marketing"],
  ];

  // printing 2D array

  // first way

  echo "<pre>";
  print_r($employees);
  echo "</pre>";

  // second way

  echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
  echo "<tr>";
    echo "<th>Emp_ID</th>";
    echo "<th>Emp_Name</th>";
    echo "<th>Emp_Age</th>";
    echo "<th>Emp_Designation</th>";
  echo "</tr>";
  for($row = 0; $row < 4; $row++){
    echo "<tr>";
    for($col = 0; $col < 4; $col++){
      echo "<td>".$employees[$row][$col]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

  // third way

  foreach($employees as $row){
    foreach( $row as $col){
      echo $col." ";
    }
    echo "<br>";
  }

?>