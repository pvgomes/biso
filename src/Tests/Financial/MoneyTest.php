<?php

namespace Tests\Financial;

use Domain\Financial as Domain;


class MoneyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function copiedMoneyShouldRepresentSameValue()
    {
        $aMoney = new Domain\Money(100, new Domain\Currency('USD'));
        $copiedMoney = Domain\Money::fromMoney($aMoney);
        $this->assertTrue($aMoney->equals($copiedMoney));
    }

    /**
     * @test
     */
    public function originalMoneyShouldNotBeModifiedOnAddition()
    {
        $aMoney = new Domain\Money(100, new Domain\Currency('USD'));
        $aMoney->add(new Domain\Money(20, new Domain\Currency('USD')));
        $this->assertEquals(100, $aMoney->amount());
    }

    /**
     * @test
     */
    public function moneysShouldBeAdded()
    {
        $aMoney = new Domain\Money(100, new Domain\Currency('USD'));
        $newMoney = $aMoney->add(new Domain\Money(20, new Domain\Currency('USD')));
        $this->assertEquals(120, $newMoney->amount());
    }

}
