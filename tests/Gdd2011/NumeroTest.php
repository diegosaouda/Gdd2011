<?php

use Gdd2011\Numero;

class NumeroTest extends PHPUnit_Framework_TestCase 
{
	
    /**@var string*/
    private $palavra = 'vwv';
    
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
    
	public function testNumero() 
	{	
		$numero = new Gdd2011\Numero();
		$this->assertEquals(4852, $numero->base20($this->palavra));		
	}
	
	
	public function testNumeroBonitoTextoA() 
	{
		$numero = new Gdd2011\Numero($this->textoA);
		$this->assertEquals(126, $numero->countNumerosBonito());		
	}
	
	public function testNumeroBonitoTextoB() 
	{
		$numero = new Gdd2011\Numero($this->textoB);
		$this->assertEquals(122, $numero->countNumerosBonito());		
	}
	
}
