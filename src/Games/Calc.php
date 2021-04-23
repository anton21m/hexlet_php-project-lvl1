<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Calc
{

    public static function getRandomExpression()
    {
        $number1 = rand(0, 50);
        $number2 = rand(0, 50);
        $action = rand(0, 2);
        if ($action == 0) {
            $answer = $number1 + $number2;
            $text = "${number1} + ${number2}";
        }
        if ($action == 1) {
            if (min($number1, $number2) == $number1) {
                $temp = $number1;
                $number1 = $number2;
                $number2 = $temp;
            }
            $answer = $number1 - $number2;
            $text = "${number1} - ${number2}";
        }
        if ($action == 2) {
            $answer = $number1 * $number2;
            $text = "${number1} * ${number2}";
        }
        return [$text, $answer];
    }

    public static function run($name)
    {
        line('What is the result of the expression?');

        $i = 1;

        while ($i < 4) {
            $result = Calc::getRandomExpression();

            line('Question: ' . $result[0]);
            $answerExp = $result[1];
            $answerUser = prompt('Your answer');

            if ((int)$answerUser === $answerExp) {
                line("Correct!");
            } else {
                line("'${answerUser}' is wrong answer ;(. Correct answer was '${answerExp}'.");
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
