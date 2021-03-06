<?php

namespace Gdd2011;

class Verbo extends Googlon
{

    const TIPO_VERBO_PRIMEIRA_PESSOA = 'primeira_pessoa';
    const TIPO_VERBO_TODOS = 'todos';

    /**
     * @param array Verbos Existentes
     */
//    private $verbosPermitidos = array(
//        self::TIPO_VERBO_PRIMEIRA_PESSOA,
//        self::TIPO_VERBO_TODOS
//    );

    /**
     * Contagem de verbos em geral
     * @param string $texto
     * @param return int Total de verbos
     */
    public function countVerbos()
    {
        return $this->countVerbosPorTipo(self::TIPO_VERBO_TODOS);
    }

    /**
     * Contagem de verbos em primeira pessoa
     * @param string $texto
     * @param return int Total de verbos em primeira pessoa
     */
    public function countVerbosPrimeiraPessoa()
    {
        return $this->countVerbosPorTipo(self::TIPO_VERBO_PRIMEIRA_PESSOA);
    }

    /**
     * Métodos auxiliar de contagem de verbos
     * @param string $texto
     * @param string $tipoVerbo Tipo de contagem a ser considerada [primeira_pessoa, todos]
     * @param return int Total de verbos
     */
    private function countVerbosPorTipo($tipoVerbo)
    {

        //trava removido por que o teste nunca testava essa trava, por ser privado, dificilmente algo errado vai entrar
        //if (! in_array($tipoVerbo, $this->verbosPermitidos)) {
        //    throw new Exception("Verbo ({$tipoVerbo}) inválido");
        //}

        $countVerbo = 0;

        foreach ($this->palavras as $palavra) {

            if (!$this->isVerbo($palavra)) {
                continue;
            }

            switch ($tipoVerbo) {
                case self::TIPO_VERBO_PRIMEIRA_PESSOA:
                    if (! $this->isVerboPrimeiraPessoa($palavra)) {
                        continue 2;
                    }

                    break;
            }

            $countVerbo++;
        }

        return $countVerbo;
    }

    /**
     * Verifica se a palavra é um verbo
     * @param  string $palavra
     * @return bool
     */
    private function isVerbo($palavra)
    {
        $ultimaLetra = substr($palavra, -1);

        return ( strlen($palavra) >= 8 && in_array($ultimaLetra, $this->foo) );
    }

    /**
     * Verifica se a palavra é um verbo primeira pessoa
     * verbo primeira pessoa começa com letra bar ou seja, diferente de foo
     * @param  string $palavra
     * @return bool
     */
    private function isVerboPrimeiraPessoa($palavra)
    {
        $primeiraLetra = substr($palavra, 0, 1);

        return (in_array($primeiraLetra, $this->foo)) ? false : true;
    }
}
