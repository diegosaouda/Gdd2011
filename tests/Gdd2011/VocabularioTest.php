<?php
namespace Gdd2011Test;

use Gdd2011\Vocabulario;

class VocabularioTest extends \PHPUnit_Framework_TestCase
{

    /**@var string*/
    private $textoA;

    /**@var string*/
    private $textoB;

     /**@var string*/
    private $textoAOrdenado;

    /**@var string*/
    private $textoBOrdenado;

    protected function setUp()
    {
        $this->textoA = file_get_contents(__DIR__ . '/../../data/textoA.txt');
        $this->textoB = file_get_contents(__DIR__ . '/../../data/textoB.txt');

        $this->textoAOrdenado = file_get_contents(__DIR__ . '/../../data/textoAOrdenado.txt');
        $this->textoBOrdenado = file_get_contents(__DIR__ . '/../../data/textoBOrdenado.txt');
    }

    protected function tearDown()
    {
        $this->textoA = '';
        $this->textoB = '';
    }

    public function testOrdenarTextoA()
    {
        $vocabulario = new Vocabulario($this->textoA);
        $this->assertEquals($this->textoAOrdenado, $vocabulario->ordenarTexto());
    }

    public function testOrdenarTextoB()
    {
        $vocabulario = new Vocabulario($this->textoB);
        $this->assertEquals($this->textoBOrdenado, $vocabulario->ordenarTexto());
    }

}
