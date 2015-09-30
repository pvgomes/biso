<?php

namespace Domain\Order;

class Item
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Order
     */
    private $order;

    /**
     * @var \Domain\Product\Product
     */
    private $product;

    /**
     * @var \Domain\Core\Price
     */
    private $total;

    /**
     * Market Item Id
     */
    private $marketId;

    /**
     * @var \DateTime
     */
    private $createdAt;
    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $additionals;


}
