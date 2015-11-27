<?php

namespace Domain\Product;


class Category
{

    protected $id;

    /**
     * @var Seller;
     */
    protected $seller;

    /**
     * @var array categoryAttributes
     *
     */
    protected $categoryAttributes;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameKey;

    /**
     * @var string
     */
    protected $categoryMarketId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Seller $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return array
     */
    public function getCategoryAttributes()
    {
        return $this->categoryAttributes;
    }

    /**
     * @param array $categoryAttributes
     */
    public function setCategoryAttributes($categoryAttributes)
    {
        $this->categoryAttributes = $categoryAttributes;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameKey()
    {
        return $this->nameKey;
    }

    /**
     * @param string $nameKey
     */
    public function setNameKey($nameKey)
    {
        $this->nameKey = $nameKey;
    }

    /**
     * @return string
     */
    public function getCategoryMarketId()
    {
        return $this->categoryMarketId;
    }

    /**
     * @param string $categoryMarketId
     */
    public function setCategoryMarketId($categoryMarketId)
    {
        $this->categoryMarketId = $categoryMarketId;
    }

}
