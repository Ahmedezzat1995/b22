<?php

interface shape {
    function area();
}

class square implements shape {
    public $length;
    function area(){
        return $this->length * $this->length;
    }
}

class rect implements shape{
    public $length;
    public $width;
    function area(){
        return $this->length * $this->width;
    }
}

class circle implements shape{
    public $raduis;
    function area(){
        return ($this->raduis **2) * pi();
    }
}

