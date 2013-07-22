<?php

require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Numero.php');

require_once('../App.php');

class NumeroTest extends PHPUnit_Framework_TestCase 
{
	
	public function testNumero() 
	{
		$palavra = 'vwv';
		
		$numero = new Gdd2011\Numero();
		
		$this->assertEquals(4852, $numero->base20($palavra));		
	}
	
	
	public function testNumeroBonitoTextoA() 
	{
		$numero = new Gdd2011\Numero(App::getTextoA());
		$this->assertEquals(126, $numero->countNumerosBonito());		
	}
	
}
