<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 31.08.2018
 * Time: 02:23
 */

namespace Factory;


use PHPUnit\Framework\TestCase;
use Factory\NumberConverter;

class FactoryMethodTest extends TestCase
{
    public function testCanNumberConverter()
    {
        $numberFactory = new NumberFactory(5);
        $this->assertInstanceOf(NumberConverter::class, $numberFactory->createConverter());
    }
}