<?php

    // str_split() 

    $str = "Lakshman";
    $arr = str_split($str, 2);
    print_r($arr); // Array ( [0] => La [1] => ks [2] => hm [3] => an )

    // chunk_split()

    $str2 = "Lakshman Kumar";
    $newStr = chunk_split($str2, 2, ".."); // La..ks..hm..an.. K..um..ar..
    echo $newStr;

?>