<?php 

class chat {
    public $text;

    public function open()
    {
        echo "open <br>";
        return $this;
    }

    public function send()
    {
        echo "{$this->text} <br>";
        return $this;
    }

    public function close()
    {
        echo "close <br>";
        return $this;

    }
}

$message1 = new chat;
$message1->text = "hello";

// $message1->open()->send()->close()->open();

