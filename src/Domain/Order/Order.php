<?php

namespace Domain\Order;

use Domain\Core;


class Order
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $marketOrderNumber;

    /**
     * @var string
     */
    private $sellerOrderNumber;

    /**
     * @var Core\Seller;
     */
    private $seller;

    /**
     * @var Core\Market;
     */
    private $market;

    /**
     * @var Item
     */
    private $items;

    /**
     * @var float
     */
    private $totalAmount;

    /**
     * @var float
     */
    private $freightAmount;

    /**
     * @var string
     */
    private $rawData;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

}
