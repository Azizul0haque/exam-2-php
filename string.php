<?php

$strings = ["Hello", "World", "PHP", "Programming"];
 
// Vowels count function
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}
foreach ($strings as $string) {
    $Countedvowel = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $Countedvowel, Reversed String: $reversedString\n";
}