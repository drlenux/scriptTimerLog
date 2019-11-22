<?php

require __DIR__ . '/../vendor/autoload.php';

use test\ForPostIncrementTest;
use test\ForPreIncrementTest;
use drlenux\scriptTimerLog\Timer;
use test\ForTest;

$preInc = new ForPreIncrementTest();
$postInc = new ForPostIncrementTest();

$count = 5000;

function test(ForTest $class, int $count)
{
    $timer = Timer::create(get_class($class));
    $timer->start();
    $class->run($count);
    $timer->stop();
}

test($preInc, $count);
test($postInc, $count);

var_dump(Timer::getLog());