<?php

use Gdd2011\Preposicao;
use Gdd2011\Verbo;
use Gdd2011\Vocabulario;

class App 
{

	private $textoA;
	private $textoB;

	public function __construct() 
	{
		$this->textoA = self::getTextoA();
		$this->textoB = self::getTextoB();
	}

	public function run() 
	{
		echo "<pre>";

		$this->autoload()
				->preposicao()
				->Verbo()
				->Vocabulario();
	}

	protected function preposicao() 
	{
		$preposicaoA = new Preposicao($this->textoA);
		$preposicaoB = new Preposicao($this->textoB);

		echo "\nPreposições";
		echo "\n";
		echo "\ntexto A: " . ($preposicaoA->countPreposicoes());
		echo "\ntexto B: " . ($preposicaoB->countPreposicoes());

		return $this;
	}

	protected function verbo() 
	{
		$verboA = new Verbo($this->textoA);
		$verboB = new Verbo($this->textoB);

		echo "\n\n\nVerbos";
		
		echo "\n";
		echo "\ntexto A: " . ($verboA->countVerbos());
		echo "\nprimeira pessoa texto A: " . ($verboA->countVerbosPrimeiraPessoa());

		echo "\n";
		echo "\ntexto B: " . ($verboB->countVerbos());
		echo "\nprimeira pessoa texto B: " . ($verboB->countVerbosPrimeiraPessoa());

		return $this;
	}

	protected function vocabulario() 
	{
		$vocabularioA = new Vocabulario($this->textoA);
		$vocabularioB = new Vocabulario($this->textoB);
		
		echo "\n\n\nVocabulário";
		
		echo "\n";
		echo "\nOrdem Texto A: " . ($vocabularioA->ordenarTexto());

		echo "\n";
		echo "\nOrdem Texto B: " . ($vocabularioB->ordenarTexto());

		return $this;
	}

	protected function autoload() 
	{
		require_once(__DIR__ . '/model/Gdd2011/Googlon.php');
		require_once(__DIR__ . '/model/Gdd2011/Preposicao.php');
		require_once(__DIR__ . '/model/Gdd2011/Verbo.php');
		require_once(__DIR__ . '/model/Gdd2011/Vocabulario.php');

		return $this;
	}

	public static function getTextoA() 
	{
		return file_get_contents(__DIR__ . '/data/textoA.txt');
	}

	public static function getTextoAOrdenado() 
	{
		return file_get_contents(__DIR__ . '/data/textoAOrdenado.txt');
	}

	public static function getTextoB() 
	{
		return file_get_contents(__DIR__ . '/data/textoB.txt');
	}

	public static function getTextoBOrdenado() 
	{
		return file_get_contents(__DIR__ . '/data/textoBOrdenado.txt');
	}

}