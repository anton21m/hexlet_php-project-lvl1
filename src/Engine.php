<?php

namespace Brain\Games\Cli;

use Brain\Games\Cli\Calc\Calc;
use Brain\Games\Cli\Calc\Even;

use function cli\line;
use function cli\prompt;

class Engine
{
    public $name;

    public function run($games)
    {
        //Welcome
        $name = $this->welcome();

        if ($games == "calc") {
            require_once("Games/Calc.php");
            Calc::run($name);
        }

        if ($games == "even") {
            require_once("Games/Even.php");
            Even::run($name);
        }
    }

    private function welcome()
    {
        line('Welcome to Brain Game!');
        $name = prompt('May I have your name?');
        line('Hello, %s!', $name);
        return $this->name = $name;
    }
}
