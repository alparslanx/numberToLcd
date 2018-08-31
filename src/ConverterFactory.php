<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 30.08.2018
 * Time: 23:34
 */

namespace Factory;
interface ConverterFactory
{
    /**
     * Defines rules for the converter factory classes to be created.
     * @param null $data
     * @return Converter
     */
    public function createConverter(): Converter;
}