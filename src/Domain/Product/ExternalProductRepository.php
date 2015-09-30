<?php

namespace Domain\Product;

use Domain\Core;


interface ExternalProductRepository extends Core\RepositoryInterface
{
    /**
     * @param ExternalProduct $externalProduct
     */
    public function add(ExternalProduct $externalProduct);

}
