<?php

namespace Gdd2011;

class Vocabulario extends Googlon
{

    /**
     * Retorna texto ordenado
     * @return string texto ordenado
     */
    public function ordenarTexto()
    {
        usort($this->palavras, array($this,'ordenar'));

        $this->palavras = array_unique($this->palavras);

        return implode(' ', $this->palavras);
    }

    /**
     * Algoritmo de ordenação
     * @param  string $palavra1
     * @param  string $palavra2
     * @return int
     *                         0 => iguais;
     *                         1 => palavra1 maior que palavra2;
     *                         -1 => palavra1 menor que palavra2;
     */
    protected function ordenar($palavra1, $palavra2)
    {
        $size = $this->getTamanhoMenorPalavra($palavra1, $palavra2);

        for ($i=0; $i < $size; $i++) {
            $letra1 = $palavra1[$i];
            $letra2 = $palavra2[$i];

            if ($this->letraPeso[$letra1] > $this->letraPeso[$letra2]) {
                return 1;
            } elseif ($this->letraPeso[$letra1] < $this->letraPeso[$letra2]) {
                return -1;
            }
        }

        //são iguais então verifica qual é o maior palavra em tamanho
        return (strlen($palavra1) - strlen($palavra2));
    }

    /**
     * Retorna o tamanho da menor palavra
     * Size é usado no for para fazer o comparativo letra a letra
     * @param string $palavra1
     * @param string $palavra2
     * @param return int contém o tamanho da menor palavra
     */
    private function getTamanhoMenorPalavra($palavra1, $palavra2)
    {
        $tamanhoPalavra1 = strlen($palavra1);
        $tamanhoPalavra2 = strlen($palavra2);

        return ($tamanhoPalavra1 <= $tamanhoPalavra2) ? $tamanhoPalavra1 : $tamanhoPalavra2;
    }
}
