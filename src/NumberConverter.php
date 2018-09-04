<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 30.08.2018
 * Time: 23:28
 */

namespace App;

class NumberConverter
{
    /**
     * @var array
     */
    public static $lines = [];

    /**
     * character map of numbers.
     * @var array
     */
    private static $numberMap = [
        0   =>  [
            ['.','_','.'],
            ['|','.','|'],
            ['|','_','|']
        ],
        1   =>  [
            ['.','.','.'],
            ['.','.','|'],
            ['.','.','|']
        ],
        2   =>  [
            ['.','_','.'],
            ['.','_','|'],
            ['|','_','.']
        ],
        3   =>  [
            ['.','_','.'],
            ['.','_','|'],
            ['.','_','|']
        ],
        4   =>  [
            ['.','.','.'],
            ['|','_','|'],
            ['.','.','|']
        ],
        5   =>  [
            ['.','_','.'],
            ['|','_','.'],
            ['.','_','|']
        ],
        6   =>  [
            ['.','_','.'],
            ['|','_','.'],
            ['|','_','|']
        ],
        7   =>  [
            ['.','_','.'],
            ['.','.','|'],
            ['.','.','|']
        ],
        8   =>  [
            ['.','_','.'],
            ['|','_','|'],
            ['|','_','|']
        ],
        9   =>  [
            ['.','_','.'],
            ['|','_','|'],
            ['.','.','|']
        ]
    ];


    /**
     * @param number $number
     * @return string
     */
    public static function transformer($number)
    {
        $number = (string)$number;
        self::$lines = [];
        if(!ctype_digit($number)){
            throw new \InvalidArgumentException("The value you set must consist only of digits. Example: 1234");
        }

        for($i=0; $i<=strlen($number)-1; $i++){
            self::lines($number[$i],0);
            self::lines($number[$i],1);
            self::lines($number[$i],2);
        }
        return implode("\n",self::$lines);
    }

    /**
     * @param int $number
     * @param int $line
     */
    private static function lines($number,$line=0){
        self::$lines[$line] .= self::$numberMap[$number][$line][0];
        self::$lines[$line] .= self::$numberMap[$number][$line][1];
        self::$lines[$line] .= self::$numberMap[$number][$line][2]."    ";
    }
}