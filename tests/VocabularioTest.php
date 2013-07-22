<?php

require_once('../vendor/autoload.php');

require_once('../model/Gdd2011/Googlon.php');
require_once('../model/Gdd2011/Vocabulario.php');

require_once('../App.php');

class VocabularioTest extends PHPUnit_Framework_TestCase 
{

	public function testOrdenarTextoA() 
	{
		$vocabulario = new Gdd2011\Vocabulario(App::getTextoA());
		$this->assertEquals(App::getTextoAOrdenado(), $vocabulario->ordenarTexto());
	}

	public function testOrdenarTextoB() 
	{
		$vocabulario = new Gdd2011\Vocabulario(App::getTextoB());
		$this->assertEquals(App::getTextoBOrdenado(), $vocabulario->ordenarTexto());
	}

}
