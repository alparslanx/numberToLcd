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
     * @var null
     */
    private $number = NULL;

    /**
     * NumberFactory constructor.
     * @param null $number
     */
    public function __construct($number=NULL)
    {
        $this->number = $number;
    }

    /**
     * Creates the NumberConverter object
     * @param null $number
     * @return Converter
     * @throws \Exception
     */
    public function createConverter(): Converter
    {
        // TODO: Implement createConverter() method.
        return new NumberConverter($this->number);
    }
}