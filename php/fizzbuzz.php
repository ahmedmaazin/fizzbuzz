<?php

function fizzBuzzRunner()
{
    $start = microtime(true);

    $fizzCount = 0;
    $buzzCount = 0;
    $fizzBuzzCount = 0;

    for ($i = 1; $i <= 1000000000; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $fizzBuzzCount++;
        }

        if ($i % 3 === 0) {
            $fizzCount++;
        }

        if ($i % 5 === 0) {
            $buzzCount++;
        }
    }

    $doneSeconds = microtime(true) - $start;

    echo "fizzes:" . $fizzCount . PHP_EOL .
        "buzzes:" . $buzzCount . PHP_EOL .
        "fizzBuzzes: " . $fizzBuzzCount . PHP_EOL .
        "completed_in: " . $doneSeconds . " seconds" . PHP_EOL;
}

fizzBuzzRunner(); 