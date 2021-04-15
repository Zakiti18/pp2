<?php

function printArr($anArray){
    foreach ($anArray as $anElement){
        echo "<p>$anElement</p>";
    }
}

function largest($anArray){
    return max($anArray);
}

function removeDups($anArray){
    $compareArray = array();

    foreach ($anArray as $anElement){
        if (!(in_array($anElement, $compareArray))){
            array_push($compareArray, $anElement);
        }
    }

    return $compareArray;
}