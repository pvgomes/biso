<?php

namespace Domain\Core;

interface MarketRepository extends RepositoryInterface
{
    /**
     * Find Market By Key-Name
     *
     * @param string $keyName
     *
     * @return Market
     */
    public function getByKeyName($keyName);
}
