<?php

namespace Domain\VO;

class Specification {

    private $size;
    private $width;
    private $weight;

    public function __construct($size, $width, $weight)
    {
        $this->size = $size;
        $this->width = $width;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function size()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function width()
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function weight()
    {
        return $this->weight;
    }

} 