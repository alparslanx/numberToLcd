<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 30.08.2018
 * Time: 23:19
 */

namespace Factory;
interface Converter
{
    /**
     * Defines rules for the converter classes to be created.
     * @return mixed
     */
    public function transformer();
}