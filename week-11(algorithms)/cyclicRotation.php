<?php
/* PHP Solution ton Codility challenge found here : 
https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/ */
function solution($A,$K){
        $newArray = [];
        if( $K == 0 ){
            return $A;
        }
        for($i=0; $i<count($A); $i++){
            if(count($A) ==1){
                return $A;
            }
            $lastInteger = (count($A) - 1);
            $lastElement = $A[$lastInteger];
            if(empty($newArray)){
                $newArray[]=$lastElement;
                unset($A[$lastInteger]);
            }
            $newArray[]=$A[$i];
        }

        return solution($newArray,(int)(($K)-1));
        
    }