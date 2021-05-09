<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('u-s-i-h');

    }

    public function getStarttime()
    {
        return $this->startTime;
    }

    public function getEndtime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = date('s');
    }

    public function stop()
    {
        $this->endTime = date('s');
    }

    public function getElapsedTime()
    {
        return abs($this->startTime*1000 - $this->endTime*1000);
    }
}



