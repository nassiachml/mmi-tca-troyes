<?php

namespace App\Tests\Service;

use App\Service\DiscountCalculator;
use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    private DiscountCalculator $discountCalculator;

    protected function setUp(): void
    {
        $this->discountCalculator = new DiscountCalculator();
    }

    // Vérifie qu'aucune remise n'est appliquée si le montant est <= 100 €
    public function testNoDiscountForSmallAmount(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(50.0, false);
        $this->assertEquals(0.0, $discount);
    }

    // > 100 € -> 10%
    public function testBaseDiscountForLargeAmount(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(150.0, false);
        $this->assertEquals(15.0, $discount);
    }

    // +5% pour VIP
    public function testVipDiscount(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(150.0, true);
        $this->assertEqualsWithDelta(22.5, $discount, 1e-9);
    }

    // Plafond 20% (ici total 15%, donc 150 sur 1000)
    public function testMaxDiscount(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(1000.0, true);
        $this->assertEqualsWithDelta(150.0, $discount, 1e-9);
    }

    // Limite stricte : 100.00 => 0
    public function testEdgeCaseExactly100(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(100.0, false);
        $this->assertEquals(0.0, $discount);
    }

    // Juste au-dessus
    public function testEdgeCaseJustAbove100(): void
    {
        $discount = $this->discountCalculator->calculateDiscount(100.01, false);
        $this->assertEqualsWithDelta(10.001, $discount, 0.0001);
    }
}
