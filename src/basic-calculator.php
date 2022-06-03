<?php
namespace JohanO98\basiccalculator;

class Calculator {
    public $num1;
    public $num2;
    public $operator;
    public function __construct(int $num1, string $operator, int $num2) {
        $this->operator = $operator;
        $this->num1= $num1;
        $this->num2= $num2;
    }

    public function calculate(){
        switch($this->operator) {
            case '+':
                $result = $this->num1+$this->num2;
                return $result;
                break;
            case '-':
                $result = $this->num1-$this->num2;
                return $result;
                break;
            case '/':
                $result = $this->num1/$this->$num2;
                return $result;
                break;
            case '*':
                $result = $this->num1*$this->$num2;
                return $result;
                default:
                break;
        }
    }
}