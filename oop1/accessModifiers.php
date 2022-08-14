<?php
# access modifiers [public , protected , private]
# public [global scope,child scope,parent scope]
# protected [child scope,parent scope]
# private [parent scope]
class mobile {
    private $color = 'red';

    public function print()
    {
        echo $this->color;
    }
}


class samsung extends mobile {
    public function printData()
    {
        echo $this->color;
    }
}

# global scope
$mobile = new mobile;
// echo $mobile->color;
# parent scope
// $mobile->print();
# child scope
$samsung = new samsung;
// print_r($samsung);
// $samsung->printData();