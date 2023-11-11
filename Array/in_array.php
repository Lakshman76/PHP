<?php

    // in_array() function :- Search for an element in an array and return 1(true) if found, nothing (false) otherwise.

    $superHeros = array('Spiderman', 'Ironman', 'Thor', 'Hulk', 'Dr. Strange');

    echo in_array('Spiderman', $superHeros)."<br>"; // 1
    echo in_array('batman', $superHeros)."<br>"; // nothing 

    if(in_array('Ironman', $superHeros)){
        echo "Ironman is present in the array.<br>";
    }else{
        echo "Ironman is not present in the array.<br>";
    }
    // output - Ironman is present in the array.

    if(in_array('Black Panther', $superHeros)){
        echo "Successfully found!<br>";
    }else{
        echo "Can't found!<br>";
    }
    // output - Can't found!

?>