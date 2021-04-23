<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Gcd
{

    public static function run($name)
    {
        line('Find the greatest common divisor of given numbers.');

        $i = 1;

        while ($i < 4) {
            $a = rand(0, 50);
            $b = rand(0, 50);

            line("Question: ${a} ${b}");
            $answer = prompt('Your answer');

            while ($a != $b) {
                if ($a > $b) {
                    $a = $a - $b;
                } else {
                    $b = $b - $a;
                }
            }

            if ($a === (int)$answer) {
                line("Correct!");
            } else {
                line("'${answer}' is wrong answer ;(. Correct answer was '${a}'.");
                break;
            }
            $i++;
        }

        if ($i === 4) {
            line("Congratulations, ${name}!");
        } else {
            line("Let's try again, ${name}!");
        }
    }
}
