<?php

//namespace WebbyLab;

class Cat extends Animal
{
    public function meow()
    {
        return "Cat " . $this->name . " is saying meow";
    }
}