<?php


class Chicken extends Animal implements Edible
{
    public function makesound(): string
    {
        return "chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
        return "could be fried";
    }
}