<?php

namespace Domain\VO;

class Measure {

    Const ONLY_SIZE = "Only";
    /**
     * @var string
     */
    private $unit;

    public function __construct($unit = false)
    {
        if (!$unit) {
            $unit = self::ONLY_SIZE;
        }
        $this->unit = $unit;
    }

    public function unit()
    {
        return $this->unit;
    }

} 