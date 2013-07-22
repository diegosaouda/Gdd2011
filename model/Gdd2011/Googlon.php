<?php

namespace Gdd2011;

abstract class Googlon  
{
	
	/**
	 * @var string Texto que é manipulado
	 */
	protected $texto;
	
	/**
	 * @var array Texto em array, dividido em palavras
	 */
	protected $palavras;
	
	/**
	 * @param array
	 */
	protected $foo = array('s','l','f','w','k');
	
	/**
	 * Não é usado, só está aqui, como consulta
	 * @var array letras bar são letras que não está em foo
	 */
	protected $bar = array();
	
	/**
	 * @var array Peso de cada letra
	 */
	protected $letraPeso = array(
		'k' => 0,  'b' => 1,  'w' => 2,  'r' =>  3, 'q' =>  4, 'd' =>  5,
		'n' => 6,  'f' => 7,  'x' => 8,  'j' =>  9, 'm' => 10, 'l' => 11,
		'v' => 12, 'h' => 13, 't' => 14, 'c' => 15, 'g' => 16, 'z' => 17,
		'p' => 18, 's' => 19
	);
	
	
	public function __construct($texto)
	{
	    if (!is_string($texto)) {
	        throw new Exception('Não é um texto Válido');
	    }
	    
	    $this->texto = $texto;
	    $this->palavras = explode(' ', $texto);
	}
	
}