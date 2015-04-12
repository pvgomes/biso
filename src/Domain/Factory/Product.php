<?php

namespace Domain\Factory;

use Domain\Entity;
use Domain\VO;

class Product {

    public static function build(\stdClass $data)
    {
        $specification = new VO\Specification($data->size, $data->width, $data->weight);
        $originalMoney = new VO\Money($data->originalPrice, new VO\Currency($data->currency));
        $specialMoney = new VO\Money($data->specialPrice, new VO\Currency($data->currency));
        $price = new VO\Price($originalMoney, $specialMoney);

        return new Entity\Product($specification, $price, $data->id, $data->quantity);
    }

}