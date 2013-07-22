<?php
require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Preposicao.php');

class PreposicaoTest extends PHPUnit_Framework_TestCase
{
    
    public function getTextoA()
    {
        return file_get_contents('../data/textoA.txt');
    }
    
    public function getTextoB()
    {
        return file_get_contents('../data/textoB.txt');
    }
    
    
    public function testCountPreposicaoTextoA()
    {
        $preposicao = new Gdd2011\Preposicao($this->getTextoA());
        $this->assertEquals(63, $preposicao->countPreposicoes());
    }
    
    public function testCountPreposicaoTextoB()
    {
        $preposicao = new Gdd2011\Preposicao($this->getTextoB());
        $this->assertEquals(61, $preposicao->countPreposicoes());
    }
    
}
