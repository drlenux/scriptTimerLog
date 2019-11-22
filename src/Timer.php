<?php

namespace drlenux\scriptTimerLog;

/**
 * Class Timer
 * @package drlenux\scriptTimerLog
 */
class Timer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $start;

    /**
     * @var float
     */
    private $stop;

    /**
     * @var bool
     */
    private $needLog;

    /**
     * Timer constructor.
     * @param string $name
     * @param bool $needLog
     */
    public function __construct(string $name, bool $needLog = true)
    {
        $this->name = $name;
        $this->needLog = $needLog;
    }

    /**
     * @param string $name
     * @param bool $needLog
     * @return static
     */
    public static function create(string $name, bool $needLog = true)
    {
        return new static($name, $needLog);
    }

    /**
     * start timer
     */
    public function start(): void
    {
        $this->start = microtime(true);
    }

    /**
     * stop timer
     */
    public function stop(): void
    {
        $this->stop = microtime(true);
        Logger::setLog($this->name, $this->diff());
    }

    /**
     * @return float
     */
    public function diff(): float
    {
        return $this->stop - $this->start;
    }

    /**
     * @return array
     */
    public static function getLog()
    {
        $log = Logger::getLog();
        asort($log);
        return $log;
    }
}
