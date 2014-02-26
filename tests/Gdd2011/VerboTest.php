<?php
namespace Gdd2011Test;

use Gdd2011\Verbo;

class VerboTest extends \PHPUnit_Framework_TestCase
{

    /**@var string*/
    private $textoA;

    /**@var string*/
    private $textoB;

    protected function setUp()
    {
        $this->textoA = file_get_contents(__DIR__ . '/../../data/textoA.txt');
        $this->textoB = file_get_contents(__DIR__ . '/../../data/textoB.txt');
    }

    protected function tearDown()
    {
        $this->textoA = '';
        $this->textoB = '';
    }

    public function testCountVerboTextoA()
    {
        $verbo = new Verbo($this->textoA);
        $this->assertEquals(26, $verbo->countVerbos());
    }

    public function testCountVerboPrimeiraPessoaTextoA()
    {
        $verbo = new Verbo($this->textoA);
        $this->assertEquals(23, $verbo->countVerbosPrimeiraPessoa());
    }

    public function testCountVerboTextoB()
    {
        $verbo = new Verbo($this->textoB);
        $this->assertEquals(30, $verbo->countVerbos());
    }

    public function testCountVerboPrimeiraPessoaTextoB()
    {
        $verbo = new Verbo($this->textoB);
        $this->assertEquals(25, $verbo->countVerbosPrimeiraPessoa());
    }

}
