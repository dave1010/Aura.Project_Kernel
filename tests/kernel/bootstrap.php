<?php
error_reporting(E_ALL);

$composer_autoload = __DIR__ . "/vendor/autoload.php";
if (! is_readable($composer_autoload)) {
    echo "Did not find 'vendor/autoload.php'." . PHP_EOL;
    echo "Try ./phpunit.sh instead of phpunit." . PHP_EOL;
    exit(1);
}

require $composer_autoload;
require dirname(dirname(__DIR__)) . '/autoload.php';
