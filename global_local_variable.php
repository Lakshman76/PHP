<?php

  $name = "Lakshman"; // global variable
  function myName(){
    // echo "my name is $name"; // error -> can't directly access global variable inside any function.
    $course = "BCA"; // local variable
  }
  myName();
  // echo $course; // error -> can't access local variable from outside the function.

  $x = 10;
  $y = 5;
  function sum(){
    global $x, $y;
    echo "x = $x and y = $y <br>"; // x = 10 and y = 5
    $x = $x+$y;
    echo "x = $x <br>"; // 15
  }
  sum();
  echo "x = $x <br>"; // 15

?>