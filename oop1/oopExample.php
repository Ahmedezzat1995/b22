<?php

class data {
    public $number1;
    public $number2;
    public $data;

    public function addNumbers()
    {
        $this->data = $this->number1 + $this->number2;
    }

    public function print()
    {
        $this->addNumbers();
        echo $this->data;
    }
}

$problem1 = new data;
$problem1->number1 = 10;
$problem1->number2 = 20;
$problem1->print(); // 30
