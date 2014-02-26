<?php

namespace Gdd2011Test;

use Gdd2011\Numero;

class GooglonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidText()
    {
        //deve lançar exception
        new Numero(10);
    }

}
