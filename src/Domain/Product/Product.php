<?php

namespace Domain\Product;


class Product
{

    protected $id;

    /**
     * @var \Domain\Core\Seller;
     */
    protected $seller;

    /**
     * @var Category;
     */
    protected $category;

    /**
     * @var ArrayCollection
     */
    protected $externalProducts;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var int
     */
    protected $stock;

    /**
     * @var \Domain\Core\Price
     */
    protected $price;

    /**
     * @var \Domain\Core\Price
     */
    protected $specialPrice;

    /**
     * @var array productAttributes
     *
     */
    protected $productAttributes;

    /**
     * @var \DateTime
     *
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     */
    protected $updatedAt;

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
     * @return \Domain\Core\Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \Domain\Core\Seller $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return ArrayCollection
     */
    public function getExternalProducts()
    {
        return $this->externalProducts;
    }

    /**
     * @param ArrayCollection $externalProducts
     */
    public function setExternalProducts($externalProducts)
    {
        $this->externalProducts = $externalProducts;
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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return \Domain\Core\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param \Domain\Core\Price $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return \Domain\Core\Price
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @param \Domain\Core\Price $specialPrice
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
    }

    /**
     * @return array
     */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    /**
     * @param array $productAttributes
     */
    public function setProductAttributes($productAttributes)
    {
        $this->productAttributes = $productAttributes;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }


}
