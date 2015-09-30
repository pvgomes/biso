<?php

namespace Domain\Product;


class LoadProduct
{
    const FILE_NAME = '-load-product.csv';

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Domain\Core\User
     *
     */
    private $user;

    /**
     * @var \Domain\Core\Seller
     */
    private $seller;

    /**
     * @var \Domain\Core\Market
     */
    private $market;

    private $loadProductReports;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $republish;

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

    public $file;

}
