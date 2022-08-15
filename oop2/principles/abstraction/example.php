<?php

class mobile {
    public function turnON()
    {
        echo "turn on";
    }
}

interface MustBeMobile{
    function turnON();
}

class samsung extends mobile implements MustBeMobile {

}