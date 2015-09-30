<?php

namespace Domain\Product;

use Domain\Core;

interface CategoryRepository extends Core\RepositoryInterface
{
    /**
     * Get All categories by Seller
     * @param Core\Seller $seller
     * @return array
     */
    public function getAllBySeller(Core\Seller $seller);

    /**
     * Add Category to collection
     * @param Category $category
     * @return mixed
     */
    public function add(Category $category);

}
