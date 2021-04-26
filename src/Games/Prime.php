<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Prime
{

    public static function run($name)
    {
        line('Find the greatest common divisor of given numbers.');

        $i = 1;

        while ($i < 4) {
            $a = rand(2, 50);
           
            line("Question: ${a}");
            $answer = prompt('Your answer');

            $isPrime = 'yes';

            for ($b = 2; $b < $a; $b++){
                if (($a % $b) === 0){
                    $isPrime = 'no';
                    break;
                }
            }

            

            if ($isPrime === $answer) {
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
