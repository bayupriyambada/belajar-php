<?php

class OOP
{
    public function publicMethod()
    {
        echo "Ini adalah OOP Metode Publik";
    }

    protected function protectedMethod()
    {
        echo "Ini adalah OOP Metode Protected";
    }

    private function privateMethod()
    {
        echo "Ini adalah OOP Metode Private";
    }

    public function accessMethodOOP() // abang
    {
        $this->publicMethod(); // adek 1
        echo "<br>";
        $this->protectedMethod(); // adek 2
        echo "<br>";
        $this->privateMethod(); // adek 3
    }
}
$oop = new OOP();
$oop->publicMethod();
echo "<br>";
$oop->accessMethodOOP();
