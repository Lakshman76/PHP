<?php

  // function

  function hello(){
    echo "Hello Everybody! <br>";
  }
  hello(); // Hello Everybody!

  // function with parameter

  function details($name, $age){
    echo "my name is $name and my age is $age <br>";
  }
  details("Lakshman", 20); // my name is Lakshman and my age is 20

  // fumction with return value

  function add($a, $b){
    return $a + $b;
  }
  $sum = add(20, 30);
  echo $sum."<br>"; // 50

  // function with call by value 

  function callByValue($num){
    $num += 10;
  }
  $number1 = 20;
  callByValue($number1);
  echo $number1."<br>"; // 20

  // function with call by reference

  function callByReference(&$num){
    $num += 10;
  }
  $number2 = 20;
  callByReference($number2);
  echo $number2."<br>"; // 30

  function someText(&$str){
    $str .= " and some extra text";
  }
  $text = "Hello this is string";
  someText($text);
  echo $text."<br>"; // Hello this is string and some extra text

  // variable function 

  function greeting(){
    echo "Welcome to my PHP code <br>";
  }
  $greet = "greeting";
  $greet(); // Welcome to my PHP code

  // Anonymous function
  $anonymousFunction = function($name){
    echo "Hello $name !<br>";
  };
  $anonymousFunction("Lakshman"); // Hello Lakshman !

?>