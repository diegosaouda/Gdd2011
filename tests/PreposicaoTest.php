<?php
require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Preposicao.php');

require_once('../App.php');

class PreposicaoTest extends PHPUnit_Framework_TestCase
{
    
    public function testCountPreposicaoTextoA()
    {
        $preposicao = new Gdd2011\Preposicao(App::getTextoA());
        $this->assertEquals(63, $preposicao->countPreposicoes());
    }
    
    public function testCountPreposicaoTextoB()
    {
        $preposicao = new Gdd2011\Preposicao(App::getTextoB());
        $this->assertEquals(61, $preposicao->countPreposicoes());
    }
    
}
