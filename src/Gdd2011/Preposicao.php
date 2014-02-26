<?php

namespace Gdd2011;

class Preposicao extends Googlon
{

    /**@const string*/
    const LETRA_NAO_PREPOSICAO = 'd';

    /**
     * Contagem Preposições
     * @param string $texto
     * @param return int Total de preposições
     */
    public function countPreposicoes()
    {
        $countPreposicoes = 0;

        foreach ($this->palavras as $palavra) {
            if (! $this->isPreposicao($palavra)) {
                continue;
            }

            $countPreposicoes++;
        }

        return $countPreposicoes;
    }

    /**
     * Verifica se a palavra é um preposição
     * @param  string $palavra
     * @return bool
     */
    private function isPreposicao($palavra)
    {
        if (strlen($palavra) != 3 || (strpos($palavra, self::LETRA_NAO_PREPOSICAO)) !== false) {
            return false;
        }

        $ultimaLetra = (substr($palavra, -1));
        if (in_array($ultimaLetra, $this->foo)) {
            return false;
        }

        return true;
    }
}
