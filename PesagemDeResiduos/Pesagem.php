<?php

namespace PHP\Modelo;

class Pesagem {

    protected date $dataPesagem;
    protected string $categoria;
    protected float $peso;

    public function __construct(date $dataPesagem, string $categoria, float $peso){
        $this->dataPesagem = $dataPesagem;
        $this->categoria = $categoria;
        $this->peso = $peso;
    }

    public function __get(string $variavel):mixed{
        return $this->variavel;
    } // fim do get

    public function __set(string $variavel, string $novoDado):void{
        $this->variavel = $novoDado;
    } // fim do set


}



?>