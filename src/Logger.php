<?php

namespace drlenux\scriptTimerLog;

/**
 * Class Logger
 * @package drlenux\scriptTimerLog
 */
final class Logger
{
    /**
     * @var array
     */
    private static $log = [];

    /**
     * @return array
     */
    public static function getLog(): array
    {
        return self::$log;
    }

    /**
     * @param string $key
     * @param $value
     */
    public static function setLog(string $key, $value): void
    {
        self::$log[$key] = $value;
    }
}
