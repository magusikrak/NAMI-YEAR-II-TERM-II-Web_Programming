<?php
function arrayCountAll($array) {
    $result = [];

    foreach ($result as $value) {
        if (isset($result[$value])) {
            $result[$value] = $result[$value]++;
        }
        else {
             $array[$value] = 1;   
        }
    }
    
    return $result;
} 
