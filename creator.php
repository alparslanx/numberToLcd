<?php
use Factory\NumberFactory;
use Colors\Color;
require_once __DIR__ . '/vendor/autoload.php';

$c = new Color();
if(PHP_SAPI !== 'cli')
{
    echo $c('Please run with terminal. Example: php worker.php 135')->white()->bold()->highlight('red') . PHP_EOL;
}


$number = isset($argv[1]) ? $argv[1] : die($c('Please send a number. Example: php worker.php 135')->white()->bold()->highlight('red') . PHP_EOL);

$numberFactory = new NumberFactory();
$converter = $numberFactory->createConverter($number);
echo $converter->transformer();