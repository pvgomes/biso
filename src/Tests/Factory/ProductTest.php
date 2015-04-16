<?php

namespace Tests\Factory;

use SebastianBergmann\Comparator\Factory;

class ProductTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function canBuildWhenDataWasInformed()
    {

        $productStdClass = new \stdClass();
        $productStdClass->size = 20;
        $productStdClass->width = 20;
        $productStdClass->weight = 20;
        $productStdClass->originalPrice = 20;
        $productStdClass->specialPrice = 15;
        $productStdClass->id = 1212;
        $productStdClass->quantity = 50;
        $productStdClass->currency = "BRL";

        $this->assertInstanceOf('\Domain\Entity\Product', \Domain\Factory\Product::build($productStdClass));
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function canBuildWithInvalidCurrency()
    {
        $productStdClass = new \stdClass();
        $productStdClass->size = 20;
        $productStdClass->width = 20;
        $productStdClass->weight = 20;
        $productStdClass->originalPrice = 20;
        $productStdClass->specialPrice = 15;
        $productStdClass->id = 1212;
        $productStdClass->quantity = 50;
        $productStdClass->currency = 00000;

        $this->assertInstanceOf('\Domain\Entity\Product', \Domain\Factory\Product::build($productStdClass));
    }

}