<?php

namespace App\Service;

class DiscountCalculator
{
    /**
     * Calcule le montant de la remise.
     *
     * Règles :
     * - Si montant > 100€, remise de base 10%.
     * - Si VIP, +5% supplémentaires.
     * - Plafond total : 20% du montant.
     */
    public function calculateDiscount(float $amount, bool $isVip): float
    {
        // 10% seulement si STRICTEMENT supérieur à 100
        $baseRate = $amount > 100.0 ? 0.10 : 0.0;

        // +5% si VIP
        $vipRate = $isVip ? 0.05 : 0.0;

        // Taux total plafonné à 20%
        $totalRate = min($baseRate + $vipRate, 0.20);

        return $amount * $totalRate;
    }
}
