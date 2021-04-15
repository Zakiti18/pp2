<?php

function printArr($anArray){
    foreach ($anArray as $anElement){
        echo "<p>$anElement</p>";
    }
}

function largest($anArray){
    return max($anArray);
}