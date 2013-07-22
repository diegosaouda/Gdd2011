<?php
require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Vocabulario.php');

class VocabularioTest extends PHPUnit_Framework_TestCase
{
    
    public function getTextoA()
    {
        return file_get_contents('../data/textoA.txt');
    }
    
    public function getTextoAOrdenado()
    {
        return file_get_contents('../data/textoAOrdenado.txt');
    }
    
    public function getTextoB()
    {
        return file_get_contents('../data/textoB.txt');
    }
    
    public function getTextoBOrdenado()
    {
        return file_get_contents('../data/textoBOrdenado.txt');
    }
    
    
    public function testOrdenarTextoA()
    {
        $vocabulario = new Gdd2011\Vocabulario($this->getTextoA());
        $this->assertEquals($this->getTextoAOrdenado(), $vocabulario->ordenarTexto());
    }
    
    public function testOrdenarTextoB()
    {
        $vocabulario = new Gdd2011\Vocabulario($this->getTextoB());
        $this->assertEquals($this->getTextoBOrdenado(), $vocabulario->ordenarTexto());
    }
    
}
