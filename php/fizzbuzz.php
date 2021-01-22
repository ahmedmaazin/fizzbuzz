#!/usr/local/bin/php

<?php

function fizzBuzzRunner()
{
    $start = microtime(true);

    $fizzCount = 0;
    $buzzCount = 0;
    $fizzBuzzCount = 0;

    for ($i = 1; $i <= 1000000000; $i++) {
        if ($i % 3 == 0) {
            if ($i % 5 == 0) {
                $fizzBuzzCount++;
            } else {
                $fizzCount++;
            }
        } else if ($i % 5 == 0) {
            if ($i % 3 == 0) {
                $fizzBuzzCount++;
            } else {
                $buzzCount++;
            }
        }
    }

    $doneSeconds = microtime(true) - $start;

    echo "fizzes:" . $fizzCount . PHP_EOL .
        "buzzes:" . $buzzCount . PHP_EOL .
        "fizzBuzzes: " . $fizzBuzzCount . PHP_EOL .
        "completed_in: " . $doneSeconds . " seconds" . PHP_EOL;
}

fizzBuzzRunner(); 