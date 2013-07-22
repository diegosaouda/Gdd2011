<?php

require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Verbo.php');

require_once('../App.php');

class VerboTest extends PHPUnit_Framework_TestCase 
{
	
	private $verboA;
	private $verboB;
	
	public function setUp()
	{
		$this->verboA = new Gdd2011\Verbo(App::getTextoA());
		$this->verboB = new Gdd2011\Verbo(App::getTextoB());
	}
	
	public function testCountVerboTextoA() 
	{
		$this->assertEquals(26, $this->verboA->countVerbos());		
	}
	
	public function testCountVerboPrimeiraPessoaTextoA()
	{
		$this->assertEquals(23, $this->verboA->countVerbosPrimeiraPessoa());
	}

	public function testCountVerboTextoB() 
	{
		$this->assertEquals(30, $this->verboB->countVerbos());
	}
	
	public function testCountVerboPrimeiraPessoaTextoB()
	{
		$this->assertEquals(25, $this->verboB->countVerbosPrimeiraPessoa());
	}

}
