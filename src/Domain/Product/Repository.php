<?php


namespace Domain\Product;


interface Repository {
    /**
     * Get Product By Id
     * @param $id
     * @return \Domain\Product\Product | null
     */
    public function getById($id);
}