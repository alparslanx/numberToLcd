<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 30.08.2018
 * Time: 23:37
 */

namespace Factory;

class NumberFactory implements ConverterFactory
{
    /**
     * Creates the NumberConverter object
     * @param null $number
     * @return Converter
     * @throws \Exception
     */
    public function createConverter($number=NULL): Converter
    {
        // TODO: Implement createConverter() method.
        return new NumberConverter($number);
    }
}