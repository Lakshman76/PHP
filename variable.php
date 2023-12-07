<?php
    // string
    $name1 = "Lakshman Kumar";
    echo $name1;

    $name2 = "Lakshman Kumar";
    echo "<h1>". $name2 ."</h1>";

    $name3 = "Lakshman";
    echo "Hyy I'm : " .$name3;

    // integer
    $myRoll = 62;
    echo "<br>My roll no is : " . $myRoll;

    // float
    $myMarks = 88.80;
    echo "<br>My marks is : " . $myMarks;

    // Array
    $superHeros = array("Spider-man","iron-man","thor",123, 456);
    echO "<br>" .$superHeros[1]; // iron-man


    /***************** Constant variable ****************/
    // syntax - define("var_name", value, boolean_value)

    define('NUM1',62); // by default boolean value become false and num1 work as case sensitive. 
    echo '<br>'. NUM1; // no need to dollar sign
    # echo '<br>'. num11; // give error

    #define('NUM2', 135 , true);// It is not supported
    #echo '<br>'. NUM2;
    // echo '<br>'. num2;

    // other syntax - const VARIABLE_NAME = value;

    const NUM3 = 123;
    echo '<br>'. NUM3;

?>