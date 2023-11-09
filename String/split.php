<?php

    // str_split() 

    $str = "Lakshman";
    $arr = str_split($str);
    print_r($arr); // Array ( [0] => L [1] => a [2] => k [3] => s [4] => h [5] => m [6] => a [7] => n )

    echo "<br>";

    $arr2 = str_split($str, 2);
    print_r($arr2); // Array ( [0] => La [1] => ks [2] => hm [3] => an )

    echo "<br>";

    // chunk_split()

    $str2 = "Lakshman Kumar";
    $newStr = chunk_split($str2, 2, ".."); // La..ks..hm..an.. K..um..ar..
    echo $newStr."<br>";


?>