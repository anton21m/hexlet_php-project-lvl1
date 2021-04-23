<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Progression
{

    public static function run($name)
    {
        line('What number is missing in the progression?');

        $i = 1;
        while ($i < 4) {
            $number = rand(0, 50);
            $step = rand(1, 5);

            $result = [];
            for ($a = 0; $a < 10; $a++) {
                $number = $number + $step;
                $result[] = ($number);
            }

            $numHide = rand(0, 9);
            $answer = $result[$numHide];
            $result[$numHide] = "..";

            line("Question: " . implode(" ", $result));

            $answerUser = prompt('Your answer');

            if ($answer === (int)$answerUser) {
                line("Correct!");
            } else {
                line("'${answerUser}' is wrong answer ;(. Correct answer was '${answer}'.");
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
