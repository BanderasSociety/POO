
<?php

class Calculator
{
    private $number1;
    private $number2;
    private $operator;
    private $result;

    public function __construct( $number1 , $number2 , $operator )
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operator = $operator;

        if ( $this->operator === '+' )
        {
            $this->add();
        }
        else if ( $this->operator === '-')
        {
            $this->substract();
        }
        else if ( $this->operator === '*')
        {
            $this->multiply();
        }
        else if ( $this->operator === '/')
        {
            $this->divide();
        }
    }

    private function add()
    {
        $this->result = $this->number1 + $this->number2;
    }

    private function substract()
    {
        $this->result = $this->number1 - $this->number2;
    }

    private function divide()
    {
        if ( $this->number2 != 0)
        {
            $this->result = $this->number1 / $this->number2;
        }
    }

    private function multiply()
    {
        $this->result = $this->number1 * $this->number2;
    }

    public function displayResult()
    {
        echo "le resultat est ". $this->result."<br>";
    }

}

// code principal



$calculator = new Calculator(5, 14, '/');
$calculator->displayResult();

$calculator = new Calculator(5, 14, '+');
$calculator->displayResult();

?>