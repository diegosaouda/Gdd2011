<?php
/**
 * @package Gdd2011
 * @author  Diego Saouda <diego.saouda@gmail.com>
 * @version GIT:ae87c73b0cda03f31da80f2a6239f4481ee72508
 */

namespace Gdd2011;

use InvalidArgumentException;

abstract class Googlon
{
    /**
     * Texto que é manipulado
     * @var string
     */
    protected $texto;

    /**
     * Texto em array, dividido em palavras
     * @var array
     */
    protected $palavras;

    /**
     * @param array
     */
    protected $foo = array('s', 'l', 'f', 'w', 'k');

    /**
     * Não é usado, só está aqui como consulta,
     * letras bar são letras que não estão em foo
     * @var array
     */
    protected $bar = array();

    /**
     * Peso de cada letra
     * @var array
     */
    protected $letraPeso = array(
        'k' => 0, 'b' => 1, 'w' => 2, 'r' => 3, 'q' => 4, 'd' => 5,
        'n' => 6, 'f' => 7, 'x' => 8, 'j' => 9, 'm' => 10, 'l' => 11,
        'v' => 12, 'h' => 13, 't' => 14, 'c' => 15, 'g' => 16, 'z' => 17,
        'p' => 18, 's' => 19
    );

    public function __construct($texto = '')
    {
        if (!is_string($texto)) {
            throw new InvalidArgumentException('Não é um texto Válido');
        }

        $this->texto = $texto;
        $this->palavras = explode(' ', $texto);
    }
}
