<?php

namespace Domain\Order;

use Domain;

interface OrderRepository extends Domain\Core\RepositoryInterface
{
    /**
     * Persist Order in the Repository
     *
     * @param Order $order
     */
    public function add(Order $order);

    /**
     * @param string $marketOrderNumber
     * @param Domain\Core\Market $market
     * @return Order
     */
    public function getByMarketOrderNumber($marketOrderNumber, Domain\Core\Market $market);

    /**
     * @param $sellerOrderNumber
     * @param Domain\Core\Seller $market
     * @return Order
     */
    public function getBySellerOrderNumber($sellerOrderNumber, Domain\Core\Seller $market);

}
