<?php

namespace App\Services;

class CalculatorService
{
    /**
     * Складывает два числа.
     *
     * @param  float|int  $a Первое слагаемое.
     * @param  float|int  $b Второе слагаемое.
     * @return float|int Результат сложения.
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
