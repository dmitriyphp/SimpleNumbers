<?php

const N = 100;

function getSimpleNumbers(): Generator
{
    for ($i = 3; $i <= N; $i++) {
        $is_simple = true;
        for ($j = 2; $j < $i; $j++) {
            if (fmod($i, $j) == 0) {
                $is_simple = false;
            }
        }
        if ($is_simple) {
            yield $i;
        }
    }
}

function showSimpleNumbers()
{
    foreach (getSimpleNumbers() as $number) {
        echo $number . "\n";
    }
}

showSimpleNumbers();

