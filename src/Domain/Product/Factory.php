<?php

namespace Domain\Product;

use Domain\Financial;

class Factory {

    public static function build(\stdClass $data)
    {
        $specification = new Specification($data->size, $data->width, $data->weight);
        $originalMoney = new Financial\Money($data->originalPrice, new Financial\Currency($data->currency));
        $specialMoney = new Financial\Money($data->specialPrice, new Financial\Currency($data->currency));
        $price = new Financial\Price($originalMoney, $specialMoney);
        return new Product($specification, $price, $data->id, $data->quantity);
    }

} 