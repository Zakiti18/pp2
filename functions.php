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

function distribution($anArray){
    sort($anArray);
    $anArray = array_count_values($anArray);

    $designerArray = array();
    foreach ($anArray as $key => $value){
        array_push($designerArray, "$key => $value");
    }

    return $designerArray;
}