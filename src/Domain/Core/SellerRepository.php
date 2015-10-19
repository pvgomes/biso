<?php

namespace Domain\Core;

interface SellerRepository extends RepositoryInterface
{
    /**
     * Find Market By Key-Name
     *
     * @param string $keyName
     *
     * @return Market
     */
    public function getByKeyName($keyName);

    /**
     * Create an Seller
     * @param Seller $seller
     * @return Seller
     */
    public function add(Seller $seller);
}
