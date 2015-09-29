<?php

namespace Domain\Product;


class Category
{

    private $id;

    /**
     * @var Seller;
     */
    private $seller;

    /**
     * @var array categoryAttributes
     *
     */
    protected $categoryAttributes;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameKey;

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
