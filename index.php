<?php 
class Calculadora
{
    private $resultado;

    public function __construct()
    {
        $this->resultado = 0;
    }

    public function add($num)
    {
        $this->resultado += $num;
    }

    public function sub($num)
    {
        $this->resultado -= $num;
    }

    public function multiply($num)
    {
        $this->resultado *= $num;
    }

    public function divide($num)
    {
        if ($num != 0) {
            $this->resultado /= $num;
        } else {
            echo "Erro: Divisão por zero.";
        }
    }

    public function total()
    {
        return $this->resultado;
    }

    public function clear()
    {
        $this->resultado = 0;
    }
}


$calculo = new Calculadora();
$calculo->add(12);
$calculo->add(2);
$calculo->sub(1);
$calculo->multiply(3);
$calculo->divide(2);
$calculo->add(0.5);


echo "Total é igual á ".$calculo->total();

$calculo->clear();





