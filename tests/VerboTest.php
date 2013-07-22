<?php
require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Verbo.php');

class VerboTest extends PHPUnit_Framework_TestCase
{
    
    public function getTextoA()
    {
        return file_get_contents('../data/textoA.txt');
    }
    
    public function getTextoB()
    {
        return file_get_contents('../data/textoB.txt');
    }
    
    
    public function testCountVerboTextoA()
    {
        $verbo = new Gdd2011\Verbo($this->getTextoA());
        $this->assertEquals(26, $verbo->countVerbos());
        $this->assertEquals(23, $verbo->countVerbosPrimeiraPessoa());
    }
    
    public function testCountVerboTextoB()
    {
        $verbo = new Gdd2011\Verbo($this->getTextoB());
        $this->assertEquals(30, $verbo->countVerbos());
        $this->assertEquals(25, $verbo->countVerbosPrimeiraPessoa());
    }
    
}
