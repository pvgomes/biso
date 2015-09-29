<?php

namespace Domain\Product;


class Product
{

    private $id;

    /**
     * @var \Domain\Core\Seller;
     */
    private $seller;

    /**
     * @var Category;
     */
    private $category;

    /**
     * @var ArrayCollection
     */
    private $externalProducts;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var int
     */
    private $stock;

    /**
     * @var \Domain\Core\Price
     */
    private $price;

    /**
     * @var array productAttributes
     *
     */
    protected $productAttributes;

    /**
     * @var \DateTime
     *
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     */
    private $updatedAt;

}
