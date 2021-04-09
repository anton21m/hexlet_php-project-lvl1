<?php

namespace Brain\Games\Cli;

require(__DIR__ . "/../vendor/autoload.php");

//Simple variant

// echo 'Welcome to the Brain Game!', PHP_EOL;
// echo 'May I have your name? ';
// $name = trim(fgets(STDIN));
// echo "Hello, {$name}", PHP_EOL;

use function cli\line;
use function cli\prompt;

line('Welcome to Brain Game!');
$name = prompt('May I have your name?');
line('Hello, %s!', $name);
