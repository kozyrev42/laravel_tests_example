<?php

namespace Tests\Unit;

use App\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    /**
     * Тестирование метода add.
     *
     * @return void
     */
    public function testAdd()
    {
        $calculator = new CalculatorService();

        $result = $calculator->add(5, 3);

        $this->assertEquals(8, $result);
    }
}
