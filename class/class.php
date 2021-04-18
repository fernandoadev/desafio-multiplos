<?php

interface Inteiro
{
    public function imprimir();
    public function multiplo();
}

class MultiploTres implements Inteiro
{
    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function imprimir()
    {
        return $this->multiplo() ? "BHUT" : false;
    }

    public function multiplo()
    {
        return $this->numero % 3 === 0;
    }
}

class MultiploCinco implements Inteiro
{
    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function multiplo()
    {
        return $this->numero % 5 === 0;
    }

    public function imprimir()
    {
        return $this->multiplo() ? "IT" : false;
    }
}


class IdentificaNumero
{

    public $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function imprimir()
    {
        $result = (new MultiploTres($this->numero))->imprimir() . (new MultiploCinco($this->numero))->imprimir();
        if (!empty($result)) {
            return $result;
        }
        return $this->numero;
    }
}
