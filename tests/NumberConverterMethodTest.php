<?php
namespace Factory;

use PHPUnit\Framework\TestCase;

class NumberConverterMethodTest extends TestCase{
    public function testCanTransformer()
    {
        $numberFactory = new NumberFactory();


        $getConvertNumber = $numberFactory->createConverter(1);
        $this->assertEquals($getConvertNumber->transformer(),"...\n..|\n..|",'Convert 1 to string');

        $getConvertNumber = $numberFactory->createConverter(2);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n._|\n|_.", 'Convert 2 to string');

        $getConvertNumber = $numberFactory->createConverter(3);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n._|\n._|", 'Convert 3 to string');

        $getConvertNumber = $numberFactory->createConverter(4);
        $this->assertEquals($getConvertNumber->transformer(),"...\n|_|\n..|", 'Convert 4 to string');

        $getConvertNumber = $numberFactory->createConverter(5);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n|_.\n._|", 'Convert 5 to string');

        $getConvertNumber = $numberFactory->createConverter(6);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n|_.\n|_|", 'Convert 6 to string');

        $getConvertNumber = $numberFactory->createConverter(7);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n..|\n..|", 'Convert 7 to string');

        $getConvertNumber = $numberFactory->createConverter(8);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n|_|\n|_|", 'Convert 8 to string');

        $getConvertNumber = $numberFactory->createConverter(9);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n|_|\n..|", 'Convert 9 to string');

        $getConvertNumber = $numberFactory->createConverter(0);
        $this->assertEquals($getConvertNumber->transformer(),"._.\n|.|\n|_|", 'Convert 0 to string');

        $getConvertNumber = $numberFactory->createConverter(15);
        $this->assertEquals($getConvertNumber->transformer(),"...   ._.   \n..|   |_.   \n..|   ._|   ", 'Convert 15 to string');
    }
}