<?php
namespace Gdd2011Test;

use Gdd2011\Preposicao;

class PreposicaoTest extends \PHPUnit_Framework_TestCase
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

    /**
     * Teste quantas preposições possuem no texto A
     */
    public function testCountPreposicaoTextoA()
    {
        $preposicao = new Preposicao($this->textoA);
        $this->assertEquals(63, $preposicao->countPreposicoes());
    }

    /**
     * Teste quantas preposições possuem no texto B
     */
    public function testCountPreposicaoTextoB()
    {
        $preposicao = new Preposicao($this->textoB);
        $this->assertEquals(61, $preposicao->countPreposicoes());
    }

}
