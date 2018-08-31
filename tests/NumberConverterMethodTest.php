<?php
namespace Factory;

use PHPUnit\Framework\TestCase;

class NumberConverterMethodTest extends TestCase{
    public function testCanTransformer()
    {
        $numberFactory = new NumberFactory(1);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"...\n..|\n..|",'Convert 1 to string');

        $numberFactory = new NumberFactory(2);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n._|\n|_.", 'Convert 2 to string');

        $numberFactory = new NumberFactory(3);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n._|\n._|", 'Convert 3 to string');

        $numberFactory = new NumberFactory(4);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"...\n|_|\n..|", 'Convert 4 to string');

        $numberFactory = new NumberFactory(5);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n|_.\n._|", 'Convert 5 to string');

        $numberFactory = new NumberFactory(6);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n|_.\n|_|", 'Convert 6 to string');

        $numberFactory = new NumberFactory(7);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n..|\n..|", 'Convert 7 to string');

        $numberFactory = new NumberFactory(8);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n|_|\n|_|", 'Convert 8 to string');

        $numberFactory = new NumberFactory(9);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n|_|\n..|", 'Convert 9 to string');

        $numberFactory = new NumberFactory(0);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"._.\n|.|\n|_|", 'Convert 0 to string');

        $numberFactory = new NumberFactory(15);
        $this->assertEquals($numberFactory->createConverter()->transformer(),"...   ._.   \n..|   |_.   \n..|   ._|   ", 'Convert 15 to string');
    }
}