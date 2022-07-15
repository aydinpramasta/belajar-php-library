<?php

namespace AydinPramasta\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello Customer {$name}, my name is {$this->name}.";
    }
}
