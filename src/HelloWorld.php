<?php

namespace questhomes\MyHelloWorldPackagist;

class HelloWorld
{
    public function sayHello(string $name = "World"): string
    {
        return "Hello " . $name . " from MyHelloWorldPackagist!";
    }
}