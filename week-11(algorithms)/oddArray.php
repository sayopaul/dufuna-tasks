<?php
/* PHP Solution ton Codility challenge found here : 
https://app.codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/*/
function solution ($A){
        $indexes = [];
        for($i=0; $i<=count($A); $i++){
            for($j=$i+1; $j<=count($A)-1; $j++ ){
                if ($A[$i] == $A[$j]){
                    $indexes[]= $i;
                    $indexes[] = $j;
                }
            }
        }

        foreach($indexes as $index){
            unset($A[$index]);
        }
        return reset($A);
    }