<?php

namespace Domain\Entity;

use Domain\VO;

class Product
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var VO\Price
     */
    private $price;

    /**
     * @var VO\Specification
     */
    private $specification;

    public function __construct(VO\Specification $specification,
                                VO\Price $price,
                                $id, $quantity)
    {
        $this->id = $id;
        $this->price = $price;
        $this->specification = $specification;
        $this->quantity = $quantity;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $ean
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function ean()
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    public function addQuantity($quantity)
    {
        $this->quantity = (int) ($this->quantity + $quantity);
    }

    public function removeQuantity($quantity)
    {
        $this->quantity = (int) ($this->quantity - $quantity);
    }

    /**
     * @var VO\Price
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return VO\Specification
     */
    public function specification()
    {
        return $this->specification;
    }

    public function isAvailable()
    {
        $isAvailable = true;

        if ($this->quantity <= 0 || !$this->isEanValid()) {
            $isAvailable = false;
        }

        return $isAvailable;
    }

    private function isEanValid()
    {
        $isEanValid = true;

        if (strlen($this->ean) <= 10 || is_numeric($this->ean)) {
            $isEanValid = false;
        }

        return $isEanValid;
    }
}