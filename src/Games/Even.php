<?php

namespace Brain\Games\Cli\Calc;

use function cli\line;
use function cli\prompt;

class Even
{

    public static function run($name)
    {
        line('Answer "yes" if the number is even, otherwise answer "no".');

        $i = 1;

        while ($i < 4) {
            $number = rand(0, 50);
            $answerText = ($number % 2 === 0) ? "yes" : "no";
            line('Question: ' . $number);

            $answer = prompt('Your answer');

            if ($answerText === $answer) {
                line("Correct!");
            } else {
                line("'${answer}' is wrong answer ;(. Correct answer was '${answerText}'.");
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
