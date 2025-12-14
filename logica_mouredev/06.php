<?php
declare(strict_types=1);

/*
 * Ejercicio
 */

function countdown(int $number): void
{
    if ($number >= 0) {
        echo $number . PHP_EOL;
        countdown($number - 1);
    }
}

countdown(100);


/*
 * Extra
 */

function factorial(int $number): int
{
    if ($number < 0) {
        echo "Los números negativos no son válidos" . PHP_EOL;
        return 0;
    } elseif ($number === 0) {
        return 1;
    }

    return $number * factorial($number - 1);
}

echo factorial(5) . PHP_EOL;


function fibonacci(int $number): int
{
    if ($number <= 0) {
        echo "La posición tiene que ser mayor que cero" . PHP_EOL;
        return 0;
    } elseif ($number === 1) {
        return 0;
    } elseif ($number === 2) {
        return 1;
    }

    return fibonacci($number - 1) + fibonacci($number - 2);
}

echo fibonacci(5) . PHP_EOL;
