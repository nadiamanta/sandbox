<?php

// Require Composer's autoloader.
require __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a logger
$log = new Logger('my-log');
$log->pushHandler(new StreamHandler(__DIR__ . "/my.log", Logger::WARNING));

// Log a message!
$log->error('I did it!');
