<?php

namespace Tests\Financial;

use Domain\Financial as Domain;


class PriceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function hasSpecialWhenIsLessValue()
    {
        $original = new Domain\Money(100, new Domain\Currency('BRL'));
        $special = new Domain\Money(80, new Domain\Currency('BRL'));
        $price = new Domain\Price($original, $special);
        $this->assertTrue($price->hasSpecial());
    }

    /**
     * @test
     */
    public function notHasSpecialWhenIsBiggerValue()
    {
        $special = new Domain\Money(100, new Domain\Currency('BRL'));
        $original = new Domain\Money(80, new Domain\Currency('BRL'));
        $price = new Domain\Price($original, $special);
        $this->assertFalse($price->hasSpecial());
    }

}
