<?php

abstract class animal {
    protected $name;
    public abstract function eat();
    public abstract function drink();
}


class cat extends animal{
    public function eat()
    {
        echo "cheese";
    }
    public function drink()
    {
        echo "milk";
    }
}


class dog extends animal {
    public function eat()
    {
        echo "bone";
    }
    public function drink()
    {
        echo "water";
    }
}

