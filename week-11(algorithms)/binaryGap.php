<?php
/* PHP Solution ton Codility challenge found here : 
https://app.codility.com/programmers/lessons/1-iterations/binary_gap/ */
function solution($N){
    $numOfZero = 0;
    $zeroArray=[0];
    $binary="";
    while($N > 1){
        $remainder = $N % 2;
        $N /= 2;
        $binary = $remainder.$binary;
    }
    $binaryArray = str_split($binary);
    for( $i=0; $i < count($binaryArray); $i++ ){
       if($binaryArray[$i] == 1){
            for($j= ($i+1); $j< (count($binaryArray) - 1); $j++){
                
                if($binaryArray[$j] == 0 && $binaryArray[$j+1] == 0){
                    $numOfZero++;
                    }elseif($binaryArray[$j] == 0 && $binaryArray[$j+1] == 1){
                    $numOfZero++;
                    $zeroArray[]=$numOfZero;
                    $numOfZero=0;
                    break;
                }
            }
        }
    }

    return  (max($zeroArray) > 0 ) ? max($zeroArray) : 0;
}