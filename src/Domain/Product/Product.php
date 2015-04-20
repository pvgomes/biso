<?php

namespace Domain\Product;

use Domain\Financial;

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
     * @var Financial\Price
     */
    private $price;

    /**
     * @var Financial\Specification
     */
    private $specification;

    public function __construct(Specification $specification,
                                Financial\Price $price,
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

    /**
     * @return int
     */
    public function quantity()
    {
        return $this->quantity;
    }

    public function addQuantity($quantity)
    {
        $this->quantity = (int) ($this->quantity + $quantity);
    }

    public function removeQuantity($quantity)
    {
        if ($quantity > $this->quantity) {
            $quantity = $this->quantity;
        }

        $this->quantity = (int) ($this->quantity - $quantity);
    }

    /**
     * @return Financial\Price
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return Financial\Specification
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