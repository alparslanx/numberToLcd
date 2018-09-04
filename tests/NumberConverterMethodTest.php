<?php
namespace Factory;

use App\NumberConverter;
use PHPUnit\Framework\TestCase;

class NumberConverterMethodTest extends TestCase{
    /**
     * Number return test.
     */
    public function testTransformer()
    {
        $this->assertEquals(NumberConverter::transformer(1),"...    \n..|    \n..|    ",'Convert 1 to string');
        $this->assertEquals(NumberConverter::transformer(2),"._.    \n._|    \n|_.    ", 'Convert 2 to string');
        $this->assertEquals(NumberConverter::transformer(3),"._.    \n._|    \n._|    ", 'Convert 3 to string');
        $this->assertEquals(NumberConverter::transformer(4),"...    \n|_|    \n..|    ", 'Convert 4 to string');
        $this->assertEquals(NumberConverter::transformer(5),"._.    \n|_.    \n._|    ", 'Convert 5 to string');
        $this->assertEquals(NumberConverter::transformer(6),"._.    \n|_.    \n|_|    ", 'Convert 6 to string');
        $this->assertEquals(NumberConverter::transformer(7),"._.    \n..|    \n..|    ", 'Convert 7 to string');
        $this->assertEquals(NumberConverter::transformer(8),"._.    \n|_|    \n|_|    ", 'Convert 8 to string');
        $this->assertEquals(NumberConverter::transformer(9),"._.    \n|_|    \n..|    ", 'Convert 9 to string');
        $this->assertEquals(NumberConverter::transformer(0),"._.    \n|.|    \n|_|    ", 'Convert 0 to string');
        $this->assertEquals(NumberConverter::transformer(15),"...    ._.    \n..|    |_.    \n..|    ._|    ", 'Convert 15 to string');

    }

    /**
     * String Test.
     */
    public function testTransformerStringException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('asdas');
    }

    /**
     * String and Number Test.
     */
    public function testTransformerStringAndNumberException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('124zdf11');
    }

    /**
     * Negative number test.
     */
    public function testTransformerNegativeNumberException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('-12312');
    }

    /**
     * Number format test.
     */
    public function testTransformerNumberFormatException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('13.531');
    }

    /**
     * Number format test.
     */
    public function testTransformerNumberFormat2Exception(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('13.531,1211');
    }

    /**
     * Array test.
     */
    public function testTransformerArrayException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer([]);
    }

    /**
     * Empty test.
     */
    public function testTransformerEmptyException(){
        $this->expectException(\InvalidArgumentException::class);
        NumberConverter::transformer('');
    }
}