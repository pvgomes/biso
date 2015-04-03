<?php

namespace Domain\Repository;


interface Product {

    /**
     * Get Product By Id
     * @param $id
     * @return Domain\Entity\Product | null
     */
    public function getById($id);

}