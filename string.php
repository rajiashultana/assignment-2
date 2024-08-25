<?php
$strings =  ["Hello", "World", "PHP", "Programming"];

foreach($strings as $value){
    
    $arr = str_split($value);
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u','A','E','I','O','U'];
    for($i = 0 ; $i<count($arr); $i++){
        if(in_array($arr[$i], $vowels)){
            $count++;
        }
    }
    $strrev = strrev($value);

    echo "Original String: $value, Vowel Count: $count, Reversed String: $strrev \n";
}