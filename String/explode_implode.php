<?php

    // Explode function - It convers string to array.

    $str = "Hello World. It's a beautiful day";
    $arr = explode(" ", $str);
    print_r($arr); // Array ( [0] => Hello [1] => World [2] => It's [3] => a [4] => beautiful [5] => day )
    echo "<br>";

    $arr2 = explode(" ", $str, 3);
    print_r($arr2); // Array ( [0] => Hello [1] => World. [2] => It's a beautiful day )
    echo "<br>";

    $colors = "red,green,blue,yellow";
    $arr3 = explode(",", $colors);
    print_r($arr3); // Array ( [0] => red [1] => green [2] => blue [3] => yellow )
    echo "<br>";

    // Implode function - It converts array to string.

    $superHeroes = ["Superman", "Batman", "Ironman", "Spiderman"];
    $SH_str = implode(" ", $superHeroes);
    echo $SH_str."<br>"; // Superman Batman Ironman Spiderman
    echo implode(", ", $superHeroes)."<br>"; // Superman, Batman, Ironman, Spiderman

?>