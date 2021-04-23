<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

class Engine
{
    public $name;


    public function run($game)
    {
        //Welcome
        $name = $this->welcome();

        $path = __DIR__ . "/Games/" . ucfirst($game) . ".php";

        if (is_readable($path)) {
            require_once($path);
            $className = "\Brain\Games\\" . ucfirst($game);

            $className::run($name);
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
