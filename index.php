<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * Phillip Ball
 * 04/15/2021
 * https://philball.greenriverdev.com/328/pp2
 * Pair Program 2
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <h1>Pair Program 2</h1>
    <?php
        echo "<p>PHP Array Practice.</p>";

        include ("functions.php");

        $numbers = array(7, 9, 8, 9, 8, 8, 6);

        printArr($numbers);
    ?>
</body>
</html>