<?php
/**
 * Created by PhpStorm.
 * User: auyar
 * Date: 30.08.2018
 * Time: 23:28
 */

namespace Factory;

class NumberConverter implements Converter
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    public $firstLne, $secondLine, $thirdLine;

    /**
     * character map of numbers.
     * @var array
     */
    private $numberMap = [
        0   =>  [
            [0,1,0],
            [2,0,2],
            [2,1,2]
        ],
        1   =>  [
            [0,0,0],
            [0,0,2],
            [0,0,2]
        ],
        2   =>  [
            [0,1,0],
            [0,1,2],
            [2,1,0]
        ],
        3   =>  [
            [0,1,0],
            [0,1,2],
            [0,1,2]
        ],
        4   =>  [
            [0,0,0],
            [2,1,2],
            [0,0,2]
        ],
        5   =>  [
            [0,1,0],
            [2,1,0],
            [0,1,2]
        ],
        6   =>  [
            [0,1,0],
            [2,1,0],
            [2,1,2]
        ],
        7   =>  [
            [0,1,0],
            [0,0,2],
            [0,0,2]
        ],
        8   =>  [
            [0,1,0],
            [2,1,2],
            [2,1,2]
        ],
        9   =>  [
            [0,1,0],
            [2,1,2],
            [0,0,2]
        ]
    ];

    /**
     * @var bool|int
     */
    private $appendEmpty = false;

    /**
     * character map values.
     * @var array
     */
    private $numberStringMap = [
        '.',
        '_',
        '|'
    ];

    /**
     * NumberConverter constructor.
     * @param null $number
     * @throws \Exception
     */
    public function __construct($number=NULL){
        if(!is_numeric($number)){
            throw new \Exception("Please enter the number.");
        }
        $this->number = (string)$number;
        $this->appendEmpty = strlen($this->number) > 1 ? 1 : 0;
    }

    /**
     * Numbers prepare for string translation and combine results.
     * @return string
     */
    public function transformer()
    {
        for($i=0; $i<=strlen($this->number)-1; $i++){
            $this->firstLine($this->number[$i]);
            $this->secondLine($this->number[$i]);
            $this->thirdLine($this->number[$i]);
        }
        return $this->firstLne."\n".$this->secondLine."\n".$this->thirdLine;
    }

    /**
     * Create first line.
     * @param $number
     */
    private function firstLine($number){
        $this->firstLne .= $this->convertNumber($number,0);
    }

    /**
     * Create second line.
     * @param $number
     */
    private function secondLine($number){
        $this->secondLine .= $this->convertNumber($number,1);
    }

    /**
     * Create third line.
     * @param $number
     */
    private function thirdLine($number){
        $this->thirdLine .= $this->convertNumber($number,2);
    }

    /**
     * Convert numbers to string.
     * @param $number
     * @param $line
     * @return string
     */
    private function convertNumber($number,$line){
        $numberToString = '';
        foreach($this->numberMap[$number][$line] as $item){
            $numberToString .= $this->numberStringMap[$item];
        }
        return $numberToString.($this->appendEmpty  ? '   ' : '');
    }
}