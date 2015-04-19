<?php

namespace Tests\Entity;

use Domain\Product;
use Domain\Financial;


class ProductTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Product\Product
     */
    private $product;

    protected function setUp()
    {
        $specification = new Financial\Specification('10','15','5');
        $original = new Financial\Money(100, new Financial\Currency('BRL'));
        $special = new Financial\Money(80, new Financial\Currency('BRL'));
        $price = new Financial\Price($original, $special);
        $this->product = new Entity\Product($specification, $price,  "10", 10);
    }

    /**
     * @test
     */
    public function isUnavailableWhenEanIsNumeric()
    {
        $this->product->setEan("145245245");
        $this->assertFalse($this->product->isAvailable());
    }

    /**
     * @test
     */
    public function isAvailableWhenEanIsAlphanumeric()
    {
        $this->product->setEan("ASDJHASJD145245245");
        $this->assertTrue($this->product->isAvailable());
    }

    /**
     * @test
     */
    public function isUnavailableWhenNotHaveStock()
    {
        $this->product->removeQuantity(27);
        $this->assertFalse($this->product->isAvailable());
    }

    /**
     * @test
     */
    public function canAddCorrectQuantity()
    {
        $this->product->addQuantity(1);
        $this->assertEquals(11, $this->product->quantity());
    }

    /**
     * @test
     */
    public function canNotRemoveLargerQuantity()
    {
        $this->product->removeQuantity(10000000000000000000000);
        $this->assertEquals(0, $this->product->quantity());
    }

}
