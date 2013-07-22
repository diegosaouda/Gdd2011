<?php

namespace Gdd2011;

use Gdd2011\Googlon;

class Numero extends Googlon 
{
	const BASE = 20;
	const NUMERO_BONITO_MAIOR_IGUAL = 440566;
	const NUMERO_BONITO_DIVISIVEL = 3;
	
	public function base20($palavra)
	{
		$numero = 0;
		
		for ($i=0 ; $i< strlen($palavra) ; $i++) {
			$letra = substr($palavra, $i, 1);
			
			$numero +=  pow(self::BASE, $i) * $this->letraPeso[$letra];
		}
		
		return $numero;
	}
	
	
	public function countNumerosBonito()
	{
		$numeroBonitoTotal = 0;
		
		foreach ($this->palavras as $palavra) {
			
			$numero = $this->base20($palavra);
			if (!$this->isNumeroBonito($numero)) continue;
			
			$numeroBonitoTotal++;
		}
		
		return $numeroBonitoTotal;
	}
	
	
	private function isNumeroBonito($numero)
	{	
		return ($numero >= self::NUMERO_BONITO_MAIOR_IGUAL && ($numero % 3) == 0);
	}
    
}
